/*
Keep My Place for courses, as in the Open Publishing guide themes and Grav Helios Open Reader (but just the page, as
module pages are scanned rather than read from top to bottom): a page in a course's module list is remembered in the
reader's browser (localStorage), and the course's Modules page shows a "Continue where you left off" box linking back to
it; its close button forgets the place. Each course has its own place - hibbittsdesign.org
*/
(function () {
    // The storage name for one course's place
    function placeKey(courseUrl) {
        return 'om-last-page|' + courseUrl;
    }

    // On a module page: remember it. The template adds a hidden element with the page's details in data- attributes
    // (data-course, data-url and data-title, which JavaScript reads as dataset.course and so on)
    var savePlace = document.querySelector('.course-save-place');
    if (savePlace) {
        try {
            // localStorage only stores text, so the details are turned into text (JSON) first
            localStorage.setItem(placeKey(savePlace.dataset.course), JSON.stringify({
                url: savePlace.dataset.url,
                title: savePlace.dataset.title
            }));
        } catch (error) {
            // storage not available (for example in some private windows): nothing is remembered
        }
    }

    // On a Modules page: if a page was remembered, show the "Continue where you left off" box
    var resume = document.querySelector('.course-resume');
    if (!resume) {
        return;
    }
    var key = placeKey(resume.dataset.course);
    var saved = null;
    try {
        // turn the stored text back into details (null when nothing was saved)
        saved = JSON.parse(localStorage.getItem(key));
    } catch (error) {
        saved = null;
    }
    if (!saved || !saved.url) {
        return;
    }
    resume.querySelector('.course-resume-link').href = saved.url;
    resume.querySelector('.course-resume-title').textContent = saved.title;
    resume.hidden = false;

    // the close button forgets the place and hides the box, moving keyboard focus to the page's heading
    resume.querySelector('.course-resume-dismiss').addEventListener('click', function () {
        try {
            localStorage.removeItem(key);
        } catch (error) {
            // nothing to forget
        }
        resume.hidden = true;
        var heading = document.querySelector('.blog-main h1');
        if (heading) {
            heading.setAttribute('tabindex', '-1');
            heading.focus();
        }
    });
})();
