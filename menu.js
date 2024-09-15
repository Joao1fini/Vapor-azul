const boxes = document.querySelectorAll('.jogos');

boxes.forEach(box => {
  box.addEventListener('mouseover', () => {
    box.classList.add('hovered');
  });

  box.addEventListener('mouseout', () => {
    box.classList.remove('hovered');
  });
});


 