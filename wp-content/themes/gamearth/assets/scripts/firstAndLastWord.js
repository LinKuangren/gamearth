$(".block-section-header-title").html(function(){
  var text= $(this).text().trim().split(" ");
  var first = text.shift();
  return (text.length > 0 ? "<span class='title-firstword'>"+ first + "</span> " : first) + text.join(" ");
});

$(".block-section-header-title").html(function(){
  var text= $(this).text().trim().split(" ");
  var last = text.pop();
  if (last.includes("Eco-système")) {
    return text.join(" ") + (text.length > 0 ? "<br /> <span class='title-lastword'>" + last + "</span>" : last);
  } else {
    return text.join(" ") + (text.length > 0 ? " <span class='title-lastword'>" + last + "</span>" : last);
  }
});