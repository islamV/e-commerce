document.addEventListener('DOMContentLoaded', () => {
  const selectDrop = document.querySelector('#countries');

  fetch('https://restcountries.com/v3.1/all')
    .then(res => res.json())
    .then(data => {
      let output = "";
      data.forEach(country => {
        output += `<option value="${country.name.common}">${country.name.common}</option>`;
      });

      selectDrop.innerHTML = output;
    })
    .catch(err => {
      console.log(err);
    });
});
