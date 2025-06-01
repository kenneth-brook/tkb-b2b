<?php include 'includes/header.php'; ?>

<main>
    <section class="hero">
        <h1>Custom Print & Embroidery for Businesses</h1>
        <p>Branded gear done right — from detailed embroidery to vibrant, full-color prints.</p>
        <a href="/contact.php" class="cta-button">Request a Quote</a>
    </section>

    <section class="services-section">
        <h2>Our Services</h2>
        <div class="services-tabs">
            <button class="tab active" data-tab="overview">TKB Custom Design</button>
            <button class="tab" data-tab="embroidery">Embroidery</button>
            <button class="tab" data-tab="vinyl">Cut Vinyl & Transfers</button>
            <button class="tab" data-tab="sublimation">Sublimation</button>
            <button class="tab" data-tab="dtf">Color Transfers (DTF)</button>
            <button class="tab" data-tab="screen">Silk Screen Transfers</button>
        </div>

        <div class="tab-content-container">
            <div class="tab-content active" id="overview">
                <img src="images/overview.jpg" alt="Overview image">
                <p>From logos on polos to full-color artwork on team shirts, TKB is your all-in-one apparel solution
                    hub.</p>
            </div>
            <div class="tab-content" id="embroidery">
                <img src="images/embroidery.jpg" alt="Embroidery example">
                <p>High-detail, multi-thread embroidery for hats, uniforms, and custom monograms — stitched with care.
                </p>
            </div>
            <div class="tab-content" id="vinyl">
                <img src="images/vinyl.jpg" alt="Vinyl transfer">
                <p>Precision cut vinyl and heat-applied transfers for bold logos and vibrant single-color graphics.</p>
            </div>
            <div class="tab-content" id="sublimation">
                <img src="images/sublimation.jpg" alt="Sublimated shirt">
                <p>Edge-to-edge, full-color sublimation prints that bond directly to polyester — zero peel, zero fade.
                </p>
            </div>
            <div class="tab-content" id="dtf">
                <img src="images/dtf.jpg" alt="DTF transfer">
                <p>Color-rich Direct-to-Film (DTF) transfers — applied in-house for lasting flexibility and comfort.</p>
            </div>
            <div class="tab-content" id="screen">
                <img src="images/screen.jpg" alt="Silkscreen transfer">
                <p>Durable screen print transfers for bulk jobs — perfect for schools, teams, and work crews.</p>
            </div>
        </div>
    </section>

    <section class="section gallery">
        <h2>Recent Projects</h2>
        <div class="card-grid">
            <img src="/assets/images/gallery1.jpg" alt="Custom Hat" />
            <img src="/assets/images/gallery2.jpg" alt="Printed Shirt" />
            <img src="/assets/images/gallery3.jpg" alt="Team Jerseys" />
        </div>
    </section>
</main>

<script>
const tabs = document.querySelectorAll('.tab');
const contents = document.querySelectorAll('.tab-content');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // Remove active from all
        tabs.forEach(t => t.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));

        // Add active to clicked
        tab.classList.add('active');
        const activeContent = document.getElementById(tab.dataset.tab);
        if (activeContent) activeContent.classList.add('active');
    });
});
</script>


<?php include 'includes/footer.php'; ?>