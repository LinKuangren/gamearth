$(document).ready(function () {
  // Récupère le champ de paragraphe ayant la classe "header-baseline"
  var headerBaseline = document.querySelector('.header-baseline');
  var sentenceBaseline = headerBaseline.textContent.split(" ");
  // Change la valeur du champ de paragraphe
  let line1 = sentenceBaseline.slice(0, Math.ceil(sentenceBaseline.length / 3)).join(" ");
  let line2 = sentenceBaseline.slice(Math.ceil(sentenceBaseline.length / 3), Math.ceil(sentenceBaseline.length / 3) * 2).join(" ");
  let line3 = sentenceBaseline.slice(Math.ceil(sentenceBaseline.length / 3) * 2).join(" ");
  var newText = line1 + '\n' + line2 + '\n' + line3;
  console.log(newText);
});
