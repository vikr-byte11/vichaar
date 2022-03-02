let colorInput2 = document.querySelector('#color_palette2');

colorInput2.addEventListener('input', () =>{
    document.getElementById('color-picker2').style.backgroundColor = colorInput2.value;
});