(function ( $, x5engine ) {
	var x = x5engine,
		s = x.settings,
		p = s.currentPath,
		b = x.boot;

	s.siteId = '6D8AF65A9C89E61FB0F9F2F9FDACAE70';
	s.version = '13-1-8-23';
	b.push(function () {
		x.setupDateTime();
		x.imAccess.showLogout();
		x.utils.autoHeight();
		x.cart.ui.updateWidget();
		x.imGrid.init();
	});
	s.menu = {
		verticalScroll: false,
	};
	b.push(function () {
		x.menu({
			target: '#imMnMn',
			verticalScroll: false,
			showCurrent: false,
			showLogoOnScroll: true,
			menuHeight: 36,
			menuWidth: 138,
			submenuHeight: 38,
			submenuWidth: 170,
			opacity: 0.8,
			fullWidthScroll: false,
			type: 'singleColumn',
			effect: 'fade'
		});
	});
	b.push(function () { x.utils.imPreloadImages([p + 'menu/hor_main.png',p + 'menu/hor_main_h.png',p + 'menu/hor_main_c.png',p + 'menu/ver_main.png',p + 'menu/ver_main_h.png',p + 'menu/ver_main_c.png',p + 'menu/sub.png',p + 'menu/sub_h.png',p + 'menu/sub_f.png',p + 'menu/sub_m.png',p + 'menu/sub_l.png',p + 'menu/sub_f_h.png',p + 'menu/sub_m_h.png',p + 'menu/sub_l_h.png', p + 'res/imClose.png']); });

	// ShowBox
	$.extend(s.imShowBox, {
		"effect": "custom", "customEffect": "generic animated fadeIn",
		'shadow' : '',
		'background' : '#000000',
		'borderWidth' : {
			'top': 1,
			'right': 1,
			'bottom': 1,
			'left': 1
		},
		'borderRadius' : '3px 3px 3px 3px',
		'borderColor' : '#000000 #000000 #000000 #000000',
		'textColor' : '#000000',
		'fontFamily' : 'Tahoma',
		'fontStyle' : 'normal',
		'fontWeight' : 'normal',
		'fontSize' : '9pt',
		'textAlignment' : 'left',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.7,
		'radialBg' : true // Works only in Mozilla Firefox and Google Chrome
	});

	// PopUp
	$.extend(s.imPopUp, {
		'effect' : 'websitex5.bl.templates.showboxanimation',
		'width' : 500,
		'shadow' : '',
		'background' : '#000000',
		'borderRadius' : 10,
		'textColor' : '#000000',
		'boxColor' : '#FFFFFF',
		'opacity' : 0.7
	});

	// Tip
	$.extend(s.imTip, {
		'borderRadius' : 1,
		'arrow' : true,
		'position' : 'bottom',
		'effect' : 'fade',
		'showTail' : true
	});

	// Captcha
	b.push(function () {
		x5engine.captcha.instance = new x5engine.captcha.x5captcha({
			"phpfile": "captcha/x5captcha.php",
		});
	}, false, 'first');

	// BreakPoints
	s.breakPoints.push({ "hash": "71b14e2b2a5121661fb7ddae017bdbf6", "name": "Desktop", "start": "max", "end": 960, "fluid": false});
	s.breakPoints.push({ "hash": "d2f9bff7f63c0d6b7c7d55510409c19b", "name": "Breakpoint 1", "start": 959, "end": 720, "fluid": false});
	s.breakPoints.push({ "hash": "72e5146e7d399bc2f8a12127e43469f1", "name": "Mobile", "start": 719, "end": 480, "fluid": false});
	s.breakPoints.push({ "hash": "5ecdcca63de80fd3d4fbb36295d22b7d", "name": "Mobile Fluid", "start": 479, "end": 0, "fluid": true});

	b.push(function () { x.cookielaw.activateScripts() });

	s.loaded = true;
})( _jq, x5engine );
