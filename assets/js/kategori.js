document.addEventListener('DOMContentLoaded', function() {
    const categorySelect = document.getElementById('category');
    const categoryContents = document.querySelectorAll('.category-content');

    // Function to hide all category contents
    function hideAllCategories() {
        categoryContents.forEach(content => {
            content.style.display = 'none';
        });
    }

    // Function to show the selected category content
    function showCategory(category) {
        hideAllCategories();
        const selectedCategory = document.getElementById(category);
        if (selectedCategory) {
            selectedCategory.style.display = 'block';
        }
    }

    // Event listener for category selection change
    categorySelect.addEventListener('change', function() {
        const selectedValue = categorySelect.value;
        showCategory(selectedValue);
    });

    // Initialize with the first category shown
    showCategory(categorySelect.value);
});