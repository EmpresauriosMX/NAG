const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeaders => {
	accordionItemHeaders.addEventListener("click", event => {
		const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
		if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader != accordionItemHeaders){
			currentlyActiveAccordionItemHeader.classList.toggle("active");
			currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
		}




		accordionItemHeaders.classList.toggle("active");
		const accordionItemBody = accordionItemHeaders.nextElementSibling;
		if(accordionItemHeaders.classList.contains("active")) {
			accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
		}
		else{
			accordionItemBody.style.maxHeight = 0;
		}
	});
});