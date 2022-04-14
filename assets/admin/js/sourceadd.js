const vm = Vue.createApp({
	data() {
		return {
			id: $("#App").attr('sid'), Data: [], class_name: -1, BoxData: [], ip: -1, ips: -1, Form: [],
		}
	}, methods: {
		UpdateCache() {
			layer.open({
				title: '温馨提示',
				content: '是否要更新货源列表?,若安装过其他货源对接插件,可以点击此按钮更新对接列表',
				icon: 3,
				btn: ['确定', '取消'],
				btn1: function () {
					let is = layer.msg('加载中，请稍后...', {icon: 16, time: 9999999});
					$.ajax({
						type: "POST",
						url: './main.php?act=SourceCache',
						data: {},
						dataType: "json",
						success: function (res) {
							layer.close(is);
							if (res.code == 1) {
								layer.alert(res.msg, {
									icon: 1, btn1: function () {
										vm.RuleGet();
									}
								});
							} else {
								layer.alert(res.msg, {
									icon: 2
								});
							}
						},
						error: function () {
							layer.msg('服务器异常！');
						}
					});
				}
			})
		}, Select(class_name) {
			this.class_name = class_name;
			for (const boxDataKey in this.Data[class_name]['field']) {
				if (this.Data[class_name]['field'][boxDataKey].type === 1) {
					this.Form[boxDataKey] = (this.Form[boxDataKey] === undefined ? '' : this.Form[boxDataKey]);
				} else {
					this.Form[boxDataKey] = (this.Form[boxDataKey] === undefined ? 1 : this.Form[boxDataKey]);
				}
			}
			this.BoxData = this.Data[class_name]['field'];
			if (this.Data[class_name].ip !== -1) {
				vm.ips = 1;
				if (this.ip === -1) {
					vm.ipGet();
				}
			} else {
				vm.ips = -1;
			}
		}, ipGet() {
			let is = layer.msg('加载中，请稍后...', {icon: 16, time: 9999999});
			$.ajax({
				type: "POST", url: './main.php?act=ip', dataType: "json", success: function (res) {
					layer.close(is);
					if (res.code == 1) {
						vm.ip = res.ip;
					} else {
						layer.alert(res.msg, {
							icon: 2
						});
					}
				}, error: function () {
					layer.msg('服务器异常！');
				}
			});
		}, Get() {
			let is = layer.msg('加载中，请稍后...', {icon: 16, time: 9999999});
			$.ajax({
				type: "POST", url: './main.php?act=SourceDataList', data: {
					id: vm.id
				}, dataType: "json", success: function (res) {
					layer.close(is);
					let Data;
					if (res.code == 1) {
						Data = res.data[0];
						vm.Form = {};
						vm.Form['url'] = Data.url;
						vm.Form['pattern'] = Data.pattern;
						vm.Form['username'] = '已隐藏,不改动就不修改';
						vm.Form['password'] = '已隐藏,不改动就不修改';
						vm.Form['secret'] = Data.secret;
						vm.Form['annotation'] = Data.annotation;
						vm.Select(Data.class_name);
					} else {
						layer.alert(res.msg, {
							icon: 2
						});
					}
				}, error: function () {
					layer.msg('服务器异常！');
				}
			});
		}, RuleGet() {
			let is = layer.msg('加载中，请稍后...', {icon: 16, time: 9999999});
			$.ajax({
				type: "POST", url: './main.php?act=SourceList', dataType: "json", success: function (res) {
					layer.close(is);
					if (res.code == 1) {
						vm.Data = res.data;
						if (vm.id != -1) {
							vm.Get();
						}
					} else {
						layer.alert(res.msg, {
							icon: 2
						});
					}
				}, error: function () {
					layer.msg('服务器异常！');
				}
			});
		}
	}
}).mount('#App');

layui.use('form', function () {
	var form = layui.form;
	form.on('submit(Preserve)', function (data) {
		data.field = vm.Form;
		data.field['class_name'] = vm.class_name;
		if (vm.id != -1) {
			data.field['SQID'] = vm.id;
		}
		let Data = {};
		for (const dataKey in data.field) {
			Data[dataKey] = data.field[dataKey];
		}
		let is = layer.msg('添加中，请稍后...', {icon: 16, time: 9999999});
		layer.open({
			title: '温馨提示', icon: 3, content: '是否要执行此操作？', btn: ['确定', '取消'], btn1: function () {
				$.ajax({
					type: "POST",
					url: './main.php?act=SourceAdd',
					data: Data,
					dataType: "JSON",
					success: function (res) {
						layer.close(is);
						if (res.code == 1) {
							if (vm.id != -1) {
								layer.alert(res.msg, {
									btn: ['刷新', '返回列表'], icon: 1, btn1: function () {
										vm.RuleGet();
									}, btn2: function () {
										location.href = 'admin.source.list.php';
									}
								});
							} else {
								layer.alert(res.msg, {
									btn: ['再添加一个', '返回列表'], icon: 1, btn1: function () {
										location.reload();
									}, btn2: function () {
										location.href = 'admin.source.list.php';
									}
								});
							}
						} else {
							layer.alert(res.msg, {
								icon: 2
							});
						}
					},
					error: function () {
						layer.msg('服务器异常！');
					}
				});
			}
		})
		return false;
	});
});

vm.RuleGet();
