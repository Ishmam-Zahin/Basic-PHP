const down_icon = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M12 14L8 10H16L12 14Z"></path></svg>`;
const up_icon = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" fill="currentColor"><path d="M12 10L16 14H8L12 10Z"></path></svg>`;

function show(element, num) {
  const target_element = document.getElementById("desc_no_" + num);
  const isVisible = target_element.getAttribute("data-isVisible");

  if (isVisible === "0") {
    target_element.style.display = "block";
    target_element.setAttribute("data-isVisible", "1");
    element.innerHTML = up_icon;
  } else if (isVisible === "1") {
    target_element.style.display = "none";
    target_element.setAttribute("data-isVisible", "0");
    element.innerHTML = down_icon;
  }
}
