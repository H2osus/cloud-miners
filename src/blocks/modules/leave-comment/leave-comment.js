document.addEventListener('DOMContentLoaded', function() {
    const stars = document.querySelectorAll('.star');

    stars.forEach((star, index) => {
        star.addEventListener('click', function() {
            resetStars(); // Сброс всех звезд

            for (let i = 0; i <= index; i++) {
                stars[i].classList.add('active'); // Закраска первых "index+1" звезд желтым цветом
            }
        });
    });

    function resetStars() {
        stars.forEach(star => {
            star.classList.remove('active'); // Сброс всех звезд
        });
    }
});
