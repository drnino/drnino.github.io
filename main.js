const tabItems = document.querySelectorAll('.tab-item');
const tabContentItems = document.querySelectorAll('.tab-content-item');

// Select tab content item
function selectItem(e) {
	// Remove all show and border classes
	removeBorder();
	removeShow();
	// Add border to current tab item
	this.classList.add('tab-border');
	// Grab content item from DOM
	const tabContentItem = document.querySelector(`#${this.id}-content`);
	// Add show class
	tabContentItem.classList.add('show');
}

// Remove bottom borders from all tab items
function removeBorder() {
	tabItems.forEach(item => {
		item.classList.remove('tab-border');
	});
}

// Remove show class from all content items
function removeShow() {
	tabContentItems.forEach(item => {
		item.classList.remove('show');
	});
}

// Listen for tab item click
tabItems.forEach(item => {
	item.addEventListener('click', selectItem);
});


//FUNCION acordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
