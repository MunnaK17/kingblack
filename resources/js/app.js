const initSiteInteractions = () => {
    document.documentElement.classList.add('js');

    const navLinks = Array.from(document.querySelectorAll('[data-nav-link]'));
    const navSections = navLinks
        .map((link) => document.querySelector(link.getAttribute('href')))
        .filter(Boolean);

    const setActiveNav = (sectionId) => {
        navLinks.forEach((link) => {
            const isActive = link.getAttribute('href') === `#${sectionId}`;
            const isMobileLink = link.classList.contains('block');

            link.classList.toggle('border-black', isActive);
            link.classList.toggle('border-transparent', !isActive);
            link.classList.toggle('bg-gray-100', isMobileLink && isActive);
            link.classList.toggle('font-bold', isMobileLink && isActive);
            link.classList.toggle('font-medium', !isMobileLink || !isActive);
            link.classList.toggle('text-black', isActive);
            link.classList.toggle('text-gray-700', !isActive);
        });
    };

    navLinks.forEach((link) => {
        link.addEventListener('click', () => {
            const targetId = link.getAttribute('href').replace('#', '');
            setActiveNav(targetId);
            link.closest('details')?.removeAttribute('open');
        });
    });

    if (navSections.length > 0) {
        const observer = new IntersectionObserver(
            (entries) => {
                const visibleSection = entries
                    .filter((entry) => entry.isIntersecting)
                    .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

                if (visibleSection) {
                    setActiveNav(visibleSection.target.id);
                }
            },
            {
                rootMargin: '-35% 0px -50% 0px',
                threshold: [0.1, 0.25, 0.5, 0.75],
            },
        );

        navSections.forEach((section) => observer.observe(section));
    }

    const welcomePopup = document.querySelector('[data-welcome-popup]');
    const welcomePopupClose = document.querySelector('[data-welcome-popup-close]');

    const closeWelcomePopup = () => {
        if (!welcomePopup) {
            return;
        }

        welcomePopup.classList.add('hidden');
        welcomePopup.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
    };

    if (welcomePopup && !welcomePopup.dataset.popupInitialized) {
        welcomePopup.dataset.popupInitialized = 'true';

        setTimeout(() => {
            welcomePopup.classList.remove('hidden');
            welcomePopup.classList.add('flex');
            document.body.classList.add('overflow-hidden');
        }, 4000);
    }

    welcomePopupClose?.addEventListener('click', closeWelcomePopup);

    welcomePopup?.addEventListener('click', (event) => {
        if (event.target === welcomePopup) {
            closeWelcomePopup();
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && welcomePopup && !welcomePopup.classList.contains('hidden')) {
            closeWelcomePopup();
        }
    });

    const revealElements = Array.from(document.querySelectorAll('[data-reveal]'));

    revealElements.forEach((element) => {
        const delay = element.dataset.revealDelay;

        if (delay) {
            element.style.setProperty('--reveal-delay', `${delay}ms`);
        }
    });

    if (revealElements.length === 0) {
        return;
    }

    document.documentElement.classList.add('reveal-ready');

    let revealTicking = false;

    const revealOnScroll = () => {
        const triggerPoint = window.innerHeight * 0.92;
        const resetPoint = window.innerHeight * 1.08;

        revealElements.forEach((element) => {
            const rect = element.getBoundingClientRect();
            const isInRevealRange = rect.top <= triggerPoint && rect.bottom >= 0;
            const isSafelyOutOfView = rect.top > resetPoint || rect.bottom < -80;

            if (isInRevealRange) {
                element.classList.add('reveal-visible');
                return;
            }

            if (isSafelyOutOfView) {
                element.classList.remove('reveal-visible');
            }
        });

        revealTicking = false;
    };

    const scheduleReveal = () => {
        if (revealTicking) {
            return;
        }

        revealTicking = true;
        requestAnimationFrame(revealOnScroll);
    };

    window.addEventListener('scroll', scheduleReveal, { passive: true });
    window.addEventListener('resize', scheduleReveal);
    window.addEventListener('load', scheduleReveal);
    scheduleReveal();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSiteInteractions, { once: true });
} else {
    initSiteInteractions();
}
