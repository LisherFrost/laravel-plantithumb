var incrementButton = document.getElementsByClassName('inc');
var decrementButton = document.getElementsByClassName('dec');
// console.log(incrementButton);
// console.log(decrementButton);

//Increment
for (var i = 0; i < incrementButton.length; i++){
    var button = incrementButton[i];
    button.addEventListener('click', function(event){
        var buttonClicked = event.target;
        // console.log(buttonClicked);
        var input = buttonClicked.parentElement.children[2];
        // console.log(input);
        var inputValue = input.value;
        // console.log(input);
        var newValue = parseInt(inputValue) + 1;
        // console.log(newValue);
        input.value = newValue; 
    })
}

//Decrement
for (var i = 0; i < decrementButton.length; i++){
    var button = decrementButton[i];
    button.addEventListener('click', function(event){
        var buttonClicked = event.target;
        // console.log(buttonClicked);
        var input = buttonClicked.parentElement.children[2];
        // console.log(input);
        var inputValue = input.value;
        // console.log(input);
        var newValue = parseInt(inputValue) - 1;
        // console.log(newValue);
        if (newValue >=0){
            input.value = newValue;
        }else{
            input.value = 0;
        }
    })
}


var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

// let ratingStarInput = [...document.querySelectorAll('.rating-star')];

// ratingStarInput.map(star, index) => {
//   star.addEventListener('click', () => {
//     for (let j = 0; j<5; j++){
//       if (j <= index){
//         ratingStarInput[j].src = 'image/fill star.png';
//       }else{
//         ratingStarInput[j].src = 'image/no fill star.png';
//       }
//     }
//   })
// }