    <!-- Main Content Closing -->
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container footer-content">
            <div style="display: flex; align-items: center; gap: 0.6rem; margin-bottom: 0.35rem;">
                <div style="width: 26px; height: 26px; border-radius: 6px; overflow: hidden; background: #000000; border: 1px solid rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center;">
                    <img src="{{ asset('images/logo.png') }}" alt="Skull Logo" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <strong style="color: #ffffff; letter-spacing: -0.01em;">Zala Risky Pratama</strong>
                <span style="color: #71717a;">&bull;</span>
                <span style="font-family: 'JetBrains Mono', monospace; font-size: 0.85rem; color: #a1a1aa;">NIM: 2024150064</span>
            </div>
            <p class="footer-tag">&copy; {{ date('Y') }} &bull; Pemrograman Web Berbasis Framework &bull; Semester 5</p>
        </div>
    </footer>

    <!-- Initialize Icons -->
    <script>
        feather.replace();
    </script>
    @yield('scripts')
</body>
</html>
