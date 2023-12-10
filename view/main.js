const slider = document.querySelectorAll('.slider');
const prevButton = document.querySelectorAll('.slider_prev');
const nextButton = document.querySelectorAll('.slider_next');
let currentIndex = [];
slider.forEach(element => {
  if(element.children.length-4<=0){
    nextButton.style.display = 'none';
    prevButton.style.display = 'none';
  }
  currentIndex.push(0);
});



function nextFunc(sliderID){
  for(let i = 0; i<slider.length; i++){
    if(slider[i].id == sliderID){
      currentIndex[i] = Math.min(currentIndex[i]+1, slider[i].children.length-4);
      changeSlider(i);
    }
  }
  
};

function prevFunc(sliderID){
  // currentIndex = Math.max(currentIndex-1, 0);


  for(let i = 0; i<slider.length; i++){
    if(slider[i].id == sliderID){
      currentIndex[i] = Math.min(currentIndex[i]-1, 0);
      changeSlider(i);
    }
  }
}

function changeSlider(sliderIndex){
  nextButton[sliderIndex].style.display = 'block';
  prevButton[sliderIndex].style.display = 'block';
  if(currentIndex[sliderIndex] == 0){
    prevButton[sliderIndex].style.display = 'none';
  }
  if(currentIndex[sliderIndex] == slider[sliderIndex].children.length-4){
    nextButton[sliderIndex].style.display = 'none';
  }
  const translateValue = -currentIndex[sliderIndex]*25+'%';
  slider[sliderIndex].style.transform = 'translateX('+translateValue+')';
}




/*tab function*/

const tab_attraction =  document.getElementById("tab_attraction");
const tab_tour =  document.getElementById("tab_tour");

tab_attraction.classList.add("blue_dark");



/*Tab*/
document.querySelector('.tab_recovery').classList.add('active');
document.querySelector('.content_recovery').classList.add('active');

function selectTab(tabNumber) {
  
  var tabs_recovery = document.querySelectorAll('.tab_recovery');
  tabs_recovery.forEach(tab => tab.classList.remove('active'));
  var selectedTab = document.querySelector('.tab_recovery:nth-child(' + tabNumber + ')');
  selectedTab.classList.add('active');

  
  var contents_recovery = document.querySelectorAll('.content_recovery');
  contents_recovery.forEach(content => content.classList.remove('active'));
  var selectedContent = document.querySelector('.content_recovery:nth-child(' + tabNumber + ')');
  selectedContent.classList.add('active');
}
