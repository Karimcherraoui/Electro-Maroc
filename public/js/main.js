
const quantityInput = document.getElementsByClassName('nbQte');
const priceElement = document.querySelector('.product-price');
const totalElement = document.querySelector('.total-price');


console.log(quantityInput)

for(const input of quantityInput){
  helper(input);
  let total1 = 0;
    document.querySelectorAll(".total-price").forEach((price)=>{
      //console.log(price.innerText.split("$")[0]);
      tmp = price.innerText.split("$")[1];
      console.log(tmp);
      total1 += parseFloat(tmp);
    });
    document.querySelector('.total').innerText = "$"+total1;
  input.addEventListener('change', function() {
    //console.log(t);
    helper(this);
    let total = 0;
    document.querySelectorAll(".total-price").forEach((price)=>{
      //console.log(price.innerText.split("$")[0]);
      tmp = price.innerText.split("$")[1];
      console.log(tmp);
      total += parseFloat(tmp);
    });
    document.querySelector('.total').innerText = "$"+total;
  });

  
}

function helper(ele){
    const quantity = parseInt(ele.value);
    const price = parseFloat(ele.parentNode.previousSibling.previousSibling.innerText);
    const total = quantity * price;
    ele.parentNode.nextSibling.nextSibling.innerText = '$' + total.toFixed(2);
}





