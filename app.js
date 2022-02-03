let sliders = document.querySelectorAll('.slider');

sliders.forEach(function (slider) {
  let sliderRange = slider.querySelector('.slider__range');
  let sliderBefore = slider.querySelector('.slider__before');
  let sliderSeparator = slider.querySelector('.slider__separator');

  function updateSliderPosition() {
    sliderBefore.style = `width:${sliderRange.value}%`;
    sliderSeparator.style = `left:${sliderRange.value}%`;
  }

  sliderRange.addEventListener('input', updateSliderPosition);

  let isDragging = false;

  sliderSeparator.addEventListener('mousedown', function() {
    isDragging = true;
  });

  sliderSeparator.addEventListener('touchstart', function() {
      isDragging = true;
  });
  document.addEventListener('mouseup', function() {
      isDragging = false;
  });
  document.addEventListener('touchend', function() {
      isDragging = false;
  });

  document.addEventListener('mousemove', function (e) {
    processMove(e.clientX);
  });

  document.addEventListener('touchmove', function (e) {
    processMove(e.touches[0].clientX);
  });

  function processMove(x) {
      if (isDragging) {
          let sliderRect = slider.getBoundingClientRect();
          let newWidth = (x - sliderRect.left) /
              sliderRect.width * 100;
          sliderRange.value = newWidth;
          updateSliderPosition();
      }
  }
});

// let btn1 = document.querySelector('#btn1');
// let btn2 = document.querySelector('#btn2');

// btn1.addEventListener('click', () => {
    
// })

    var element0 = document.getElementById('btn0');
    var element = document.getElementById('btn1');
    var element2 = document.getElementById('btn2');
    var element3 = document.getElementById('btn4');

    element0.onclick = function(){
        document.getElementById('show').classList.remove('troi1');
        document.getElementById('show2').classList.remove('troi2');
        document.getElementById('show').classList.remove('deux1');
        document.getElementById('show2').classList.remove('deux2');
        document.getElementById('show').classList.remove('quatre1');
        document.getElementById('show2').classList.remove('quatre2');

        document.getElementById('btn0').classList.add('color1');
        document.getElementById('btn1').classList.remove('color1');
        document.getElementById('btn2').classList.remove('color1');
        document.getElementById('btn4').classList.remove('color1');
    }

    element.onclick = function(){
        document.getElementById('show').classList.remove('troi1');
        document.getElementById('show2').classList.remove('troi2');
        document.getElementById('show').classList.add('deux1');
        document.getElementById('show2').classList.add('deux2');
        document.getElementById('show').classList.remove('quatre1');
        document.getElementById('show2').classList.remove('quatre2');

        document.getElementById('btn0').classList.remove('color1');
        document.getElementById('btn1').classList.add('color1');
        document.getElementById('btn2').classList.remove('color1');
        document.getElementById('btn4').classList.remove('color1');
    }

    element2.onclick = function(){
        document.getElementById('show').classList.remove('deux1');
        document.getElementById('show2').classList.remove('deux2');
        document.getElementById('show').classList.remove('quatre1');
        document.getElementById('show2').classList.remove('quatre2');
        document.getElementById('show').classList.add('troi1');
        document.getElementById('show2').classList.add('troi2');

        document.getElementById('btn0').classList.remove('color1');
        document.getElementById('btn1').classList.remove('color1');
        document.getElementById('btn2').classList.add('color1');
        document.getElementById('btn4').classList.remove('color1');
    }

    element3.onclick = function(){
      document.getElementById('show').classList.remove('deux1');
      document.getElementById('show2').classList.remove('deux2');
      document.getElementById('show').classList.remove('troi1');
      document.getElementById('show2').classList.remove('troi2');
      document.getElementById('show').classList.add('quatre1');
      document.getElementById('show2').classList.add('quatre2');

      document.getElementById('btn0').classList.remove('color1');
      document.getElementById('btn1').classList.remove('color1');
      document.getElementById('btn2').classList.remove('color1');
      document.getElementById('btn4').classList.add('color1');
    }


