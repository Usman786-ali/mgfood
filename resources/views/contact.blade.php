@extends('layouts.app')

@section('title', 'Get in Touch - MG Food & Event Planners')

@section('content')
    <!-- Hero Section -->
    <section class="hero"
        style="min-height: 60vh; padding-top: 160px; background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/Blog-Background.jpeg') }}') center/cover;">
        <div class="container hero-container">
            <div class="hero-content">
                <span class="hero-badge" data-aos="fade-up">Contact Us</span>
                <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                    Let's Start <span class="highlight">Planning</span>
                </h1>
                <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
                    Whether you have a specific date in mind or just want to explore possibilities, our consultants are
                    ready to help.
                </p>
            </div>
        </div>
    </section>

    <!-- Detailed Office Locations -->
    <section style="padding: 100px 0; background: #fff;">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Our Regional Offices</h2>
                <p class="section-description">Visit our experience centers to browse our decor catalog and taste our
                    signature menu items.</p>
            </div>
            <div class="services-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                <!-- Karachi -->
                <div class="service-card" style="text-align: left; padding: 40px; border: 1px solid #eee;">
                    <h3 style="color: var(--dark); margin-bottom: 15px;">Karachi Head Office</h3>
                    <p style="color: #666; margin-bottom: 20px;">Plot # 15-C, Mezzanine Floor, 4th Zamzama Commercial Lane,
                        Phase 5, DHA.</p>
                    <p style="font-weight: 600;">+92 21 35301807</p>
                    <p style="color: var(--primary);">Open: 10:00 AM - 8:00 PM</p>
                </div>
                <!-- Lahore -->
                <div class="service-card" style="text-align: left; padding: 40px; border: 1px solid #eee;">
                    <h3 style="color: var(--dark); margin-bottom: 15px;">Lahore Branch</h3>
                    <p style="color: #666; margin-bottom: 20px;">Main Gulberg Road, Near Liberty Market (Opening Soon for
                        Consultations).</p>
                    <p style="font-weight: 600;">+92 300 1234567</p>
                    <p style="color: var(--primary);">By Appointment Only</p>
                </div>
                <!-- Islamabad -->
                <div class="service-card" style="text-align: left; padding: 40px; border: 1px solid #eee;">
                    <h3 style="color: var(--dark); margin-bottom: 15px;">Islamabad Suite</h3>
                    <p style="color: #666; margin-bottom: 20px;">F-7 Markaz, Blue Area, Business Hub Center.</p>
                    <p style="font-weight: 600;">+92 321 7654321</p>
                    <p style="color: var(--primary);">Open: 11:00 AM - 7:00 PM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Contact Area -->
    <section style="padding: 100px 0; background: #f8f9fa;">
        <div class="container">
            <div class="about-grid" style="grid-template-columns: 1.5fr 1fr; gap: 60px;">
                <div data-aos="fade-right">
                    <h2 class="section-title" style="text-align: left; margin-bottom: 40px;">Send a Detailed Inquiry</h2>
                    <form class="contact-form" id="contactForm"
                        style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.05);">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" placeholder="Full Name" required
                                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" placeholder="Email Address" required
                                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                            </div>
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                            <div class="form-group">
                                <label>Event Date (Approx)</label>
                                <input type="date"
                                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                            </div>
                            <div class="form-group">
                                <label>Expected Budget</label>
                                <select style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
                                    <option>Select Range</option>
                                    <option>Under 5 Lac</option>
                                    <option>5 Lac - 15 Lac</option>
                                    <option>15 Lac - 50 Lac</option>
                                    <option>Above 50 Lac</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 30px;">
                            <label>Event Vision & Details</label>
                            <textarea rows="5" placeholder="Tell us about your dream event..."
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Schedule My
                            Consultation</button>
                    </form>
                </div>

                <div data-aos="fade-left">
                    <h2 class="section-title" style="text-align: left; margin-bottom: 40px;">Direct Channels</h2>
                    <div style="margin-bottom: 40px;">
                        <div style="display: flex; gap: 20px; margin-bottom: 30px;">
                            <div
                                style="width: 50px; height: 50px; background: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">
                                📞</div>
                            <div>
                                <h4 style="margin-bottom: 5px;">General Inquiries</h4>
                                <p style="color: #666;">info@mgevents.pk</p>
                                <p style="color: #666;">+92 300 0000000</p>
                            </div>
                        </div>
                        <div style="display: flex; gap: 20px; margin-bottom: 30px;">
                            <div
                                style="width: 50px; height: 50px; background: #25D366; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">
                                💬</div>
                            <div>
                                <h4 style="margin-bottom: 5px;">Quick WhatsApp</h4>
                                <p style="color: #666;">Start a chat for fast quotes</p>
                                <a href="#" style="color: #25D366; font-weight: bold;">Chat Now →</a>
                            </div>
                        </div>
                    </div>

                    <div style="background: var(--dark); color: white; padding: 30px; border-radius: 20px;">
                        <h4 style="color: var(--primary); margin-bottom: 15px;">Looking for Careers?</h4>
                        <p style="font-size: 14px; margin-bottom: 15px;">We are always looking for creative florists, chefs,
                            and coordinators.</p>
                        <a href="mailto:hr@mgevents.pk" style="color: white; text-decoration: underline;">Apply at
                            hr@mgevents.pk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section Before Map -->
    <section style="background: #000; padding: 80px 20px;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px;">
                <div style="flex: 1; min-width: 300px;">
                    <p
                        style="color: #D4A853; font-size: 14px; letter-spacing: 2px; text-transform: uppercase; margin: 0 0 15px 0; font-weight: 600;">
                        BOOK AN APPOINTMENT TODAY</p>
                    <h2
                        style="color: #D4A853; font-family: 'Playfair Display', serif; font-size: 38px; font-weight: 700; margin: 0; line-height: 1.3;">
                        Make Your Event Unforgettable with<br>Our Expert Planners
                    </h2>
                </div>
                <div style="flex: 0 0 auto;">
                    <a href="{{ route('contact') }}"
                        style="display: inline-flex; align-items: center; gap: 10px; background: #D4A853; color: #000; padding: 18px 40px; border-radius: 50px; text-decoration: none; font-weight: 700; font-size: 16px; transition: all 0.3s;">
                        Book Now
                        <span style="font-size: 20px;">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section" style="padding: 0; margin-bottom: 0;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14483.838332944744!2d67.06206999416932!3d24.831055751671055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33d60eace38e1%3A0xff484eea25f9d107!2sMG%20food%20%26%20Event%20Planners!5e0!3m2!1sen!2s!4v1766091325523!5m2!1sen!2s"
            width="100%" height="500" style="border:0; display: block;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection