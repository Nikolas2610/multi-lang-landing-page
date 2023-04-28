document.addEventListener('DOMContentLoaded', function () {
    const traderButtons = Array.from(document.getElementsByClassName('trader__btn'));
    const contentBlocks = Array.from(document.getElementsByClassName('meta-trader-content'));
    const contentImages = Array.from(document.getElementsByClassName('meta-trader-image'));

    traderButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            const key = button.getAttribute('data-key');

            // Add 'invert' class to the clicked buttons icon
            const clickedIcon = document.getElementById(`trader__icons-${key}`);
            clickedIcon.classList.add('filter', 'invert');

            // Remove 'invert' class from other buttons icons
            traderButtons.forEach(otherButton => {
                if (otherButton !== button) {
                    const otherKey = otherButton.getAttribute('data-key');
                    const otherIcon = document.getElementById(`trader__icons-${otherKey}`);
                    otherIcon.classList.remove('filter', 'invert');
                }
            });

            // Show the clicked buttons title
            const clickedTitle = document.getElementById(`trader__title-${key}`);
            clickedTitle.classList.remove('hidden');

            // Hide other buttons titles
            traderButtons.forEach(otherButton => {
                if (otherButton !== button) {
                    const otherKey = otherButton.getAttribute('data-key');
                    const otherTitle = document.getElementById(`trader__title-${otherKey}`);
                    otherTitle.classList.add('hidden');
                }
            });

            // Remove 'bg-secondary' class and add 'bg-gray-300' class from other buttons
            traderButtons.forEach(otherButton => {
                if (otherButton !== button) {
                    otherButton.classList.remove('bg-secondary');
                    otherButton.classList.add('bg-gray-300');
                }
            });

            // Add 'bg-secondary' class and remove 'bg-gray-300' class to the active button
            button.classList.remove('bg-gray-300');
            button.classList.add('bg-secondary');

            // Show the clicked content block and hide other content blocks
            contentBlocks.forEach((contentBlock, contentIndex) => {
                if (contentIndex === index) {
                    contentBlock.classList.add('active');
                    contentBlock.classList.remove('inactive');
                } else {
                    contentBlock.classList.remove('active');
                    contentBlock.classList.add('inactive');
                }
            });

            // Show the clicked image block and hide other image blocks
            contentImages.forEach((contentBlock, contentIndex) => {
                if (contentIndex === index) {
                    contentBlock.classList.add('active');
                    contentBlock.classList.remove('inactive');
                } else {
                    contentBlock.classList.remove('active');
                    contentBlock.classList.add('inactive');
                }
            });
        });
    });
});