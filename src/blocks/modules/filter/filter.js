document.addEventListener('DOMContentLoaded', function() {
    const filterItems = document.querySelectorAll('.filter-item');

    filterItems.forEach(item => {
        item.addEventListener('click', function() {
            filterItems.forEach(item => {
                item.classList.remove('filter-active');
            });

            this.classList.add('filter-active');
        });
    });
});