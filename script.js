const feedbackText = document.querySelector('.feedback-text');
window.onload = ()=>{
    var url = window.location.href
    var getError = url.substring(url.indexOf('error='));
    if(getError === "error=true")
        feedbackText.style.display = "block";
}