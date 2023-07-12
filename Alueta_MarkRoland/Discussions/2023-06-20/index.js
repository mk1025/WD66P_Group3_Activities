function calculateProduct(input) {
  let product = 0;
  for (let i = 0; i < 5; i++) {
    product = input * i;
  }

  return product;
}

// console.log(calculateProduct(3));

function checkEvenOddSum() {
  let input = parseInt(prompt("Enter a number"));
  let oddSum = 0;
  let evenSum = 0;

  for (let i = 0; i < input; i++) {
    if (i % 2 == 0) {
      evenSum += i;
    } else {
      oddSum += i;
    }
  }
  console.log(evenSum);
  console.log(oddSum);
  return oddSum + evenSum;
}

console.log(checkEvenOddSum());
