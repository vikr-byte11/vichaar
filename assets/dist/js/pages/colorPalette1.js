let colorInput = document.querySelector('#color_palette1');

colorInput.addEventListener('input', () =>{
    document.getElementById('color-picker1').style.backgroundColor = colorInput.value;
});