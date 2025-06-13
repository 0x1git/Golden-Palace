var detailpanel = document.getElementById("guestdetailpanel");

adduseropen = () => {
    detailpanel.style.display = "flex";
}
adduserclose = () => {
    detailpanel.style.display = "none";
}

// View toggle functionality
let isCardView = true;

const toggleView = () => {
    const cardView = document.querySelector('.booking-cards-container');
    const tableView = document.getElementById('table-view');
    const toggleBtn = document.getElementById('view-toggle-btn');
    
    if (isCardView) {
        // Switch to table view
        cardView.style.display = 'none';
        tableView.style.display = 'block';
        toggleBtn.innerHTML = '<i class="fas fa-th-large me-1"></i>Card View';
        isCardView = false;
    } else {
        // Switch to card view
        cardView.style.display = 'block';
        tableView.style.display = 'none';
        toggleBtn.innerHTML = '<i class="fas fa-table me-1"></i>Table View';
        isCardView = true;
    }
}

//search bar logic using js
const searchFun = () => {
    let filter = document.getElementById('search_bar').value.toUpperCase();
    
    if (isCardView) {
        // Search in card view
        let bookingsGrid = document.getElementById("bookings-data");
        let bookingCards = bookingsGrid.getElementsByClassName('booking-card');

        for(var i = 0; i < bookingCards.length; i++) {
            let card = bookingCards[i];
            let searchableText = '';
            
            // Get text content from various elements in the card
            let guestName = card.querySelector('.guest-name');
            let guestEmail = card.querySelector('.guest-email');
            let guestCountry = card.querySelector('.country');
            let guestPhone = card.querySelector('.phone');
            let roomType = card.querySelector('.room-value');
            let bedType = card.querySelector('.bed-value');
            let mealPlan = card.querySelector('.meal-value');
            let bookingId = card.querySelector('.id-number');
            let status = card.querySelector('.booking-status span');
            
            // Combine all searchable text
            if(guestName) searchableText += guestName.textContent + ' ';
            if(guestEmail) searchableText += guestEmail.textContent + ' ';
            if(guestCountry) searchableText += guestCountry.textContent + ' ';
            if(guestPhone) searchableText += guestPhone.textContent + ' ';
            if(roomType) searchableText += roomType.textContent + ' ';
            if(bedType) searchableText += bedType.textContent + ' ';
            if(mealPlan) searchableText += mealPlan.textContent + ' ';
            if(bookingId) searchableText += bookingId.textContent + ' ';
            if(status) searchableText += status.textContent + ' ';
            
            if(searchableText.toUpperCase().indexOf(filter) > -1) {
                card.style.display = "";
                // Add highlight animation
                card.classList.add('search-highlight');
                setTimeout(() => {
                    card.classList.remove('search-highlight');
                }, 600);
            } else {
                card.style.display = "none";
            }
        }
    } else {
        // Search in table view
        let myTable = document.getElementById("table-data");
        let tr = myTable.getElementsByTagName('tr');

        for(var i = 0; i < tr.length; i++){
            let td = tr[i].getElementsByTagName('td')[1];

            if(td){
                let textvalue = td.textContent || td.innerHTML;

                if(textvalue.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display = "";
                }else{
                    tr[i].style.display = "none";
                }
            }
        }
    }
}
