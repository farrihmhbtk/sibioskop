const seats = document.querySelectorAll(".row .seat:not(.occupied)");
const seatContainer = document.querySelector(".row-container");
const count = document.getElementById("count");
const total = document.getElementById("total");
const movieSelect = document.getElementById("movie");

// Another Approach

// seats.forEach(function(seat) {
//   seat.addEventListener("click", function(e) {
//     seat.classList.add("selected");
//     const selectedSeats = document.querySelectorAll(".container .selected");
//     selectedSeathLength = selectedSeats.length;
//     count.textContent = selectedSeathLength;
//     let ticketPrice = +movieSelect.value;
//     total.textContent = ticketPrice * selectedSeathLength;
//   });
// });

// localStorage.clear();

populateUI();

let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem("selectedMovieIndex", movieIndex);
  localStorage.setItem("selectedMoviePrice", moviePrice);
}

// function updateSelectedCount() {
//   const selectedSeats = document.querySelectorAll(".container .selected");
//   const selectedSeatNumbers = [...selectedSeats].map(function(seat) {
//     return seat.textContent;
//   });

//   seatsIndex = [...selectedSeats].map(function(seat) {
//     return seat.dataset.seatIndex;
//   });

//   localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

//   let selectedSeatsCount = selectedSeats.length;
//   // count.textContent = selectedSeatsCount;
//   total.textContent = selectedSeatsCount * ticketPrice;

//   // Update the seat numbers in the count span
//   count.textContent = selectedSeatNumbers.join(", ");
// }

function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll(".container .selected");
  const selectedSeatNumbers = [...selectedSeats].map(function(seat) {
    return seat.textContent;
  });

  seatsIndex = [...selectedSeats].map(function(seat) {
    return seat.dataset.seatIndex;
  });

  localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

  let selectedSeatsCount = selectedSeats.length;
  count.textContent = selectedSeatsCount;
  total.textContent = selectedSeatsCount * ticketPrice;

  // Update the seat numbers in the count span
  count.textContent = selectedSeatNumbers.join(", ");

  // Update the href of the "Ringkasan Order" button
  // const ringkasanOrderLink = document.querySelector(".row-container a");
  // ringkasanOrderLink.href = ringkasanOrderLink.href.split('?')[0] + "?seatCount=" + selectedSeatsCount + "&seatIndices=" + seatsIndex.join(",");
}



// Get data from localstorage and populate
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach(function(seat, index) {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add("selected");
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
  }
}

// Movie select event

movieSelect.addEventListener("change", function(e) {
  ticketPrice = +movieSelect.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Adding selected class to only non-occupied seats on 'click'

seatContainer.addEventListener("click", function(e) {
  if (
    e.target.classList.contains("seat") &&
    !e.target.classList.contains("occupied")
  ) {
    console.log("klik");
    e.target.classList.toggle("selected");
    updateSelectedCount();
  }
});

// Initial count and total rendering
updateSelectedCount();

