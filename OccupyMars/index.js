function liftOff() {
  let flameElement = document.getElementById("flame-1");
  let rocketElement = document.getElementById("f9");
  setFlameLiftOffState(flameElement);

  setTimeout(() => {
    lauchRocket(rocketElement, flameElement);
  }, 2000);
}

function setFlameLiftOffState(flameElement) {
  flameElement.style.width = "40px";
  flameElement.style.height = "81px";
  flameElement.style.left = "584px";
  flameElement.style.top = "307px";
}

function lauchRocket(rocketElement, flameElement) {
  rocketElement.style.transform = "translateY(-900px)";
  flameElement.style.transform = "translateY(-900px)";
}
