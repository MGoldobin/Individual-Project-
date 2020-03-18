var isClicked = false;
// here javascript finds and selects a button element
var button = document.getElementsByTagName('button')[0];
button.onclick = function() {
    if (isClicked) {
      // if the button's state is "clicked", then do this
      button.classList = '';
      isClicked = false;
  
    } else {
      // if the button's state is "not clicked", then do this
      button.classList.add('clicked');
      isClicked = true;
    }
  };