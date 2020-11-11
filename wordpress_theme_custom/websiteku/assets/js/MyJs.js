
const data = {
	// content
	'home' : `first <span> serve </span> <br/> first <span> come </span>`,
	'about' : ` <span>honesty</span> of  passion `,
	'product' : ``,
	// image content
	'imageContent' : {
		'imgHome1' : 'http://localhost/websiteku/wp-content/uploads/2020/11/image_processing20191104-3658-12n18dk-1.gif',
		'imgAbout1' : 'http://localhost/websiteku/wp-content/uploads/2020/11/800x600_2.gif',
	},
};

const vm = new Vue({
	el : '#contentApp',
	data:   {
				message1 : data.home,
				message2 : data.about,
				message3 : data.product,
				// imag home page
				// panel
				imagePanel1: data.imageContent.imgPanel1,
				imagePanel2: data.imageContent.imgPanel2,
				imagePanel3: data.imageContent.imgPanel3,
				// content
				imageHome1 : data.imageContent.imgHome1,
				imageHome2 : data.imageContent.imgHome2,
				// image about page
				imageAbout1 : data.imageContent.imgAbout1,

				ImageTitle: 'websitekuAssetsImage',
		    }
});


