document.addEventListener("DOMContentLoaded", function () {
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const navbar = document.getElementById('navbar');

    hamburgerIcon.addEventListener('click', function () {
        navbar.classList.toggle('active');
    });
    
});

document.addEventListener("DOMContentLoaded", function () {
    const filterIcon = document.getElementsByClassName('filterIcon');
    const filterSection = document.getElementById('filterSection');

    filterIcon.addEventListener('click', function () {
        filterSection.classList.toggle('hidden');
    
  });

});



