document.addEventListener('DOMContentLoaded', () => {
	const imgLightBox = document.querySelectorAll('#imagen');
	M.Materialbox.init(imgLightBox, {
		inDuration: 500,
		outDuration: 500,
	});
});
