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
                <p><b>TKB Custom Design</b> is a full-service print and embroidery partner serving schools, businesses,
                    teams, and organizations across Southeast Georgia and beyond. We specialize in custom-branded gear —
                    including embroidered uniforms, vinyl signage, full-color transfers, decals, tap tags, and
                    sublimated promotional items.</p>

                <p>Our in-house production gives us the flexibility to handle everything from short-run jobs to bulk
                    orders — with fast turnaround and consistent quality. Whether you're gearing up a school district,
                    outfitting a crew, or prepping for an event, we deliver the polish your brand deserves.</p>

                <p>TKB is trusted by educational programs in Long County and small businesses throughout Glynn County,
                    and we’re proud to help local organizations look professional, unified, and ready to represent.</p>

            </div>
            <div class="tab-content" id="embroidery">
                <p>Professional, multi-thread embroidery perfect for staff polos, hats, jackets, and monogrammed
                    uniforms — stitched in-house for precision, consistency, and durability.</p>
            </div>
            <div class="tab-content" id="vinyl">
                <p>Our vinyl services cover more than just apparel. We offer precision-cut heat transfers <em>and</em>
                    adhesive vinyl for custom decals, window graphics, hard hats, signage, and equipment branding.
                    Whether it's pressed onto fabric or stuck to a surface, we deliver clean cuts, bold color, and
                    long-lasting results.</p>

            </div>
            <div class="tab-content" id="sublimation">
                <p>We specialize in sublimation printing on hard-surface substrates like mugs, tumblers, metal signage,
                    ornaments, and more — delivering full-color, permanent designs that won't peel, crack, or fade.
                    While sublimation apparel is available upon request, most of our clients prefer giftable and
                    promotional products where sublimation truly shines.</p>
            </div>
            <div class="tab-content" id="dtf">
                <p>Flexible, high-resolution color prints pressed onto garments for full-color detail, even on dark
                    fabrics — great for custom art, team branding, and short-run collections.</p>
            </div>
            <div class="tab-content" id="screen">
                <p>Durable, vendor-provided screen transfers used for large orders with limited color — a cost-effective
                    solution for schools, work crews, and bulk spirit wear.</p>
            </div>
        </div>
    </section>

    <section class="section clients">
        <h2>Organizations We've Outfitted</h2>
        <p style="text-align: center; max-width: 700px; margin: 0 auto;">
            From team spirit wear to district-wide initiatives, TKB is trusted to deliver quality and consistency for
            schools and organizations.
        </p>
        <ul class="client-list" style="list-style: none; text-align: center; padding: 0; margin-top: 1.5rem;">
            <li>Long County High School Cheerleading</li>
            <li>Smiley Elementary School</li>
            <li>Walker Elementary School</li>
            <li>Long County Sunshine Club <span style="color: var(--coral); font-weight: bold;">(2024 & 2025)</span>
            </li>
            <li>District-wide Staff Apparel <span style="color: var(--lavender); font-style: italic;">(In
                    Progress)</span></li>
        </ul>
        <p style="text-align: center; margin-top: 2rem;">
            Our portfolio is growing fast — photos coming soon!
        </p>
        <p style="text-align: center; font-style: italic; opacity: 0.85;">Proudly rooted in Southeast Georgia, built to
            serve clients anywhere.</p>
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