
// 一文字ずつspanで囲う
var textWrap1 = document.querySelectorAll('.js-top__title1');
var textWrap2 = document.querySelectorAll('.js-top__title2');
  textWrap1.forEach((t) => (
	t.innerHTML = t.textContent.replace(/\S/g, '<span>$&</span>')
));
  textWrap2.forEach((t) => (
	t.innerHTML = t.textContent.replace(/\S/g, '<span>$&</span>')
));

// mvタイトル
gsap.fromTo('.js-top__title1 > span', {
	opacity:0,
	scale: 0,
  rotateZ: '-180deg'
},{
	opacity:1,
	scale:1,
  rotateZ: '0',
	stagger:0.1,
  delay: 2.0
});

gsap.fromTo('.js-top__title2 > span', {
	opacity:0,
	scale: 0,
  rotateZ: '-90deg'
},{
	opacity:1,
	scale:1,
  rotateZ: '0',
	stagger:0.2,
  delay: 2.5
});