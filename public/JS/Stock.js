const file = document.querySelector('.filePic');
const label = document.getElementById('fileName')

const A = file.value;
  console.log(A)
file.addEventListener('change',()=>{
  const A = file.value;
  const B = A.split(/(\\|\/)/g).pop()
  label.textContent = "You uploaded : " + B
})

