<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="theme-color" content="#0B192C" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="apple-mobile-web-app-title" content="K-Shop Apps" />
  <title>K-Shop Apps - Percetakan, ATK & Jasa</title>

  <!-- Inline Data URI PWA Manifest (PrintX Navy & Gold) -->
  <link rel="manifest" href="data:application/manifest+json;charset=utf-8,%7B%22name%22%3A%22K-Shop%20Apps%20-%20Percetakan%2C%20ATK%20%26%20Jasa%22%2C%22short_name%22%3A%22K-Shop%20Apps%22%2C%22start_url%22%3A%22.%2F%22%2C%22display%22%3A%22standalone%22%2C%22background_color%22%3A%22%23F8FAFC%22%2C%22theme_color%22%3A%22%230B192C%22%2C%22icons%22%3A%5B%7B%22src%22%3A%22data%3Aimage%2Fsvg%2Bxml%3Butf8%2C%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%20512%20512'%3E%3Crect%20width%3D'512'%20height%3D'512'%20rx%3D'112'%20fill%3D'%230B192C'%2F%3E%3Cpath%20d%3D'M144%20112h224v80H144z'%20fill%3D'%2338BDF8'%2F%3E%3Crect%20x%3D'88'%20y%3D'184'%20width%3D'336'%20height%3D'168'%20rx%3D'28'%20fill%3D'%23FFFFFF'%2F%3E%3Crect%20x%3D'144'%20y%3D'288'%20width%3D'224'%20height%3D'128'%20rx%3D'16'%20fill%3D'%23FBBF24'%2F%3E%3Ccircle%20cx%3D'368'%20cy%3D'232'%20r%3D'16'%20fill%3D'%2310B981'%2F%3E%3C%2Fsvg%3E%22%2C%22sizes%22%3A%22512x512%22%2C%22type%22%3A%22image%2Fsvg%2Bxml%22%7D%5D%7D" />

  <!-- Google Fonts: Montserrat, Plus Jakarta Sans & JetBrains Mono -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Montserrat:wght@700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            display: ['"Montserrat"', 'sans-serif'],
            mono: ['"JetBrains Mono"', 'monospace'],
          }
        }
      }
    }
  </script>

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    :root {
      --primary: #0B192C;
      --primary-mid: #162B4D;
      --primary-light: #E0F2FE;
      --primary-text: #0B192C;
      --accent: #FBBF24;
      --accent-hover: #F59E0B;
      --accent-text: #0B192C;
      --sidebar-bg: #0B192C;
      --bg-body: #F8FAFC;
    }

    /* Full-Page Blogger Widget Override Container */
    #app-root {
      position: fixed;
      inset: 0;
      z-index: 999999;
      overflow-y: auto;
      overflow-x: hidden;
      background-color: var(--bg-body);
      color: #0F172A;
      font-family: 'Plus Jakarta Sans', sans-serif;
      -webkit-tap-highlight-color: transparent;
      transition: background-color 0.3s ease;
    }

    .font-printx {
      font-family: 'Montserrat', sans-serif;
    }

    /* Dynamic Theme Helper Classes */
    .theme-bg-primary { background-color: var(--primary) !important; }
    .theme-bg-primary-mid { background-color: var(--primary-mid) !important; }
    .theme-bg-primary-light { background-color: var(--primary-light) !important; }
    .theme-text-primary { color: var(--primary-text) !important; }
    .theme-border-primary { border-color: var(--primary) !important; }

    .theme-btn-accent {
      background-color: var(--accent) !important;
      color: var(--accent-text) !important;
      transition: all 0.2s ease;
    }
    .theme-btn-accent:hover {
      background-color: var(--accent-hover) !important;
      transform: translateY(-1px);
    }
    .theme-text-accent { color: var(--accent) !important; }
    .theme-bg-accent-soft { background-color: color-mix(in srgb, var(--accent) 18%, white) !important; }

    .theme-hero-banner {
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-mid) 65%, #1E3A8A 100%) !important;
    }
    .theme-sidebar {
      background: linear-gradient(180deg, var(--sidebar-bg) 0%, var(--primary) 100%) !important;
    }

    /* Glassmorphism Surface */
    .glass-card {
      background: rgba(255, 255, 255, 0.88);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(226, 232, 240, 0.9);
      box-shadow: 0 4px 20px -2px rgba(11, 25, 44, 0.06);
    }

    /* Custom Scrollbar */
    #app-root::-webkit-scrollbar, *::-webkit-scrollbar { width: 6px; height: 6px; }
    *::-webkit-scrollbar-track { background: #f1f5f9; }
    *::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 9999px; }
    *::-webkit-scrollbar-thumb:hover { background: #94a3b8; }

    .fade-in {
      animation: fadeIn 0.25s ease-out forwards;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(6px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Dedicated Print Area (Isolates content from Blogger & Fixed Overlay) */
    #print-area-container {
      display: none;
    }

    @media print {
      @page { margin: 10mm; }
      html, body {
        background: #ffffff !important;
        margin: 0 !important;
        padding: 0 !important;
        overflow: visible !important;
        height: auto !important;
      }
      body > *:not(#print-area-container) {
        display: none !important;
      }
      #print-area-container {
        display: block !important;
        position: static !important;
        width: 100% !important;
        background: #ffffff !important;
        color: #000000 !important;
      }
      #print-area-container.thermal-paper {
        width: 78mm !important;
        max-width: 78mm !important;
        margin: 0 auto !important;
        font-family: 'JetBrains Mono', monospace !important;
        font-size: 11px !important;
      }
      .no-print { display: none !important; }
    }
  </style>
</head>
<body>

  <!-- ==================== DEDICATED PRINT INJECTION CONTAINER ==================== -->
  <div id="print-area-container"></div>

  <!-- ==================== FULL-PAGE BLOGGER OVERLAY ROOT ==================== -->
  <div id="app-root" class="antialiased selection:bg-amber-400 selection:text-slate-950">

    <!-- GLOBAL TOAST NOTIFICATION -->
    <div id="toastContainer" class="fixed top-4 right-4 z-[1000050] flex flex-col gap-2 max-w-sm w-[calc(100%-2rem)] pointer-events-none"></div>

    <!-- CUSTOM CONFIRMATION DIALOG -->
    <div id="confirmDialogModal" class="hidden fixed inset-0 z-[1000040] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4">
      <div class="bg-white rounded-2xl max-w-sm w-full p-6 shadow-2xl border border-slate-200 fade-in">
        <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center mb-4">
          <i data-lucide="alert-triangle" class="w-6 h-6"></i>
        </div>
        <h3 id="confirmDialogTitle" class="font-extrabold text-base text-slate-900">Konfirmasi Hapus</h3>
        <p id="confirmDialogMessage" class="text-xs text-slate-600 mt-1.5 leading-relaxed">Apakah Anda yakin ingin menghapus data ini?</p>
        <div class="flex justify-end gap-2 mt-6">
          <button onclick="closeModal('confirmDialogModal')" class="px-4 py-2.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs transition">Batal</button>
          <button id="confirmDialogYesBtn" class="px-4 py-2.5 rounded-lg bg-rose-600 hover:bg-rose-700 text-white font-bold text-xs shadow-md transition">Ya, Hapus</button>
        </div>
      </div>
    </div>

    <!-- PWA INSTALL BANNER -->
    <div id="pwaInstallBanner" class="hidden fixed bottom-20 md:bottom-6 right-4 left-4 md:left-auto md:w-96 z-[1000030] theme-bg-primary text-white p-4 rounded-2xl shadow-2xl border border-white/15 flex items-center justify-between gap-3">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
          <i data-lucide="printer" class="w-5 h-5 theme-text-accent"></i>
        </div>
        <div>
          <h4 class="font-bold text-sm" id="pwaBannerTitle">Install K-Shop Apps</h4>
          <p class="text-xs text-slate-300">Pasang di layar utama untuk akses kasir cepat.</p>
        </div>
      </div>
      <div class="flex items-center gap-2 shrink-0">
        <button onclick="dismissInstallBanner()" class="p-2 text-slate-300 hover:text-white text-xs font-semibold">Nanti</button>
        <button onclick="triggerPwaInstall()" class="px-3.5 py-2 theme-btn-accent font-extrabold text-xs rounded-lg shadow">Install</button>
      </div>
    </div>

    <!-- ==================== LOGIN SCREEN (PRINTX HYBRID STYLE) ==================== -->
    <div id="loginScreen" class="min-h-screen flex flex-col justify-between theme-hero-banner relative overflow-hidden">
      <!-- Top Announcement Strip -->
      <div class="bg-black/30 border-b border-white/10 px-4 py-2 text-center text-[11px] font-bold tracking-wider uppercase text-white/90 relative z-10">
        SISTEM MANAJEMEN PERCETAKAN DIGITAL, TOKO ATK & JASA • <span class="theme-text-accent">POINT OF SALE & PRODUKSI</span>
      </div>

      <!-- Decorative Blobs -->
      <div class="absolute top-16 left-10 w-80 h-80 bg-sky-500/10 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute bottom-16 right-10 w-96 h-96 bg-amber-400/15 rounded-full blur-3xl pointer-events-none"></div>

      <div class="flex-1 flex items-center justify-center p-4 relative z-10">
        <div class="w-full max-w-md bg-white/95 backdrop-blur-xl rounded-2xl shadow-2xl overflow-hidden border border-white/25 fade-in">
          <!-- Login Brand Header -->
          <div class="theme-bg-primary p-7 text-white text-center relative border-b-4 border-amber-400">
            <div class="w-20 h-20 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl mx-auto flex items-center justify-center mb-3 shadow-xl overflow-hidden" id="loginLogoContainer">
              <i data-lucide="printer" class="w-10 h-10 theme-text-accent"></i>
            </div>
            <h1 class="font-printx text-2xl font-black tracking-tight uppercase" id="loginShopName">K-SHOP APPS</h1>
            <p class="text-white/75 text-xs mt-1 font-medium" id="loginShopTagline">Percetakan Digital, Toko ATK & Jasa Profesional</p>

            <!-- Preview Mode Indicator (Hidden automatically when IS_PREVIEW = false) -->
            <div id="loginPreviewIndicator" class="hidden mt-3 inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-400/20 border border-amber-400/40 text-amber-300 text-[11px] font-extrabold">
              <span class="w-2 h-2 rounded-full bg-amber-400 animate-ping"></span>
              <span>MODE PREVIEW AKTIF (DATA DUMMY LOKAL)</span>
            </div>
          </div>

          <!-- Role Switcher Tabs (Admin Utama via Supabase Auth vs Karyawan via Tabel Karyawan) -->
          <div class="p-6 space-y-4">
            <div class="grid grid-cols-2 gap-1.5 p-1 bg-slate-100 rounded-xl border border-slate-200">
              <button type="button" id="tabLoginAdmin" onclick="switchLoginRoleTab('admin')"
                class="py-2.5 rounded-lg text-xs font-extrabold transition theme-bg-primary text-white shadow-sm">
                Admin Utama
              </button>
              <button type="button" id="tabLoginKaryawan" onclick="switchLoginRoleTab('karyawan')"
                class="py-2.5 rounded-lg text-xs font-extrabold transition text-slate-600 hover:text-slate-900">
                Karyawan / Kasir
              </button>
            </div>

            <form id="loginForm" onsubmit="handleLogin(event)" class="space-y-4">
              <div>
                <label id="loginIdLabel" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Email Admin Utama</label>
                <div class="relative">
                  <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                    <i id="loginIdIcon" data-lucide="mail" class="w-4 h-4"></i>
                  </span>
                  <input type="text" id="loginIdentifier" required placeholder="admin@kshop.id"
                    class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-300 rounded-lg text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white transition" />
                </div>
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Password</label>
                <div class="relative">
                  <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                    <i data-lucide="lock" class="w-4 h-4"></i>
                  </span>
                  <input type="password" id="loginPassword" required placeholder="Masukkan password..."
                    class="w-full pl-10 pr-11 py-3 bg-slate-50 border border-slate-300 rounded-lg text-sm font-semibold focus:outline-none focus:ring-2 focus:ring-amber-400 focus:bg-white transition" />
                  <button type="button" onclick="togglePasswordVisibility()" class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-700">
                    <i id="eyeIcon" data-lucide="eye" class="w-4 h-4"></i>
                  </button>
                </div>
              </div>

              <button type="submit" id="btnLoginSubmit"
                class="w-full py-3.5 theme-btn-accent font-printx font-extrabold uppercase tracking-wider rounded-lg shadow-lg flex items-center justify-center gap-2 text-xs">
                <span>MASUK KE APLIKASI</span>
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </button>
            </form>

            <!-- Quick Login Buttons (ONLY VISIBLE WHEN IS_PREVIEW = true) -->
            <div id="previewQuickLoginBox" class="hidden pt-4 border-t border-slate-200">
              <p class="text-[10px] text-center text-slate-500 font-extrabold uppercase tracking-wider mb-2.5">Pintasan Uji Coba (Mode Preview)</p>
              <div class="grid grid-cols-2 gap-2.5">
                <button type="button" onclick="quickPreviewLogin('admin')"
                  class="py-2.5 px-3 bg-slate-900 hover:bg-slate-800 text-amber-400 rounded-lg text-xs font-extrabold transition flex items-center justify-center gap-1.5 shadow-sm">
                  <i data-lucide="shield-check" class="w-4 h-4"></i>
                  <span>Masuk Admin</span>
                </button>
                <button type="button" onclick="quickPreviewLogin('karyawan')"
                  class="py-2.5 px-3 bg-amber-100 hover:bg-amber-200 text-slate-900 border border-amber-300 rounded-lg text-xs font-extrabold transition flex items-center justify-center gap-1.5">
                  <i data-lucide="user-check" class="w-4 h-4"></i>
                  <span>Masuk Karyawan</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center py-3 text-[11px] text-white/60 relative z-10">
        &copy; 2026 K-Shop Apps • Powered by Supabase Cloud & PWA
      </div>
    </div>

    <!-- ==================== MAIN APP SHELL ==================== -->
    <div id="mainApp" class="hidden min-h-screen flex flex-col md:flex-row">

      <!-- DESKTOP LEFT SIDEBAR (DEEP MIDNIGHT NAVY #0B192C) -->
      <aside class="hidden md:flex md:w-64 lg:w-72 theme-sidebar text-white flex-col fixed inset-y-0 left-0 z-[1000010] shadow-2xl border-r border-white/10">
        <!-- Brand Header -->
        <div class="p-5 border-b border-white/10 flex items-center gap-3">
          <div id="sidebarBrandLogo" class="w-11 h-11 rounded-xl bg-white/10 border border-amber-400/40 flex items-center justify-center shrink-0 overflow-hidden shadow-lg">
            <i data-lucide="printer" class="w-5 h-5 theme-text-accent"></i>
          </div>
          <div class="overflow-hidden">
            <h2 id="sidebarShopName" class="font-printx font-extrabold text-sm tracking-tight uppercase truncate">K-SHOP APPS</h2>
            <span id="sidebarShopTagline" class="text-[11px] text-amber-400/90 font-semibold block truncate">Printing & ATK Solutions</span>
          </div>
        </div>

        <!-- User Profile Card -->
        <div class="p-3.5 mx-4 mt-4 rounded-xl bg-white/5 border border-white/10">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg theme-btn-accent flex items-center justify-center font-printx font-black text-xs shrink-0 shadow" id="sidebarAvatar">AD</div>
            <div class="overflow-hidden">
              <p class="font-bold text-xs truncate text-white" id="sidebarUserName">Administrator</p>
              <span id="sidebarUserRole" class="inline-block px-2 py-0.5 text-[10px] font-bold rounded bg-white/10 theme-text-accent mt-0.5">Admin Utama</span>
            </div>
          </div>
        </div>

        <!-- Navigation Menu -->
        <nav id="desktopNav" class="flex-1 px-3.5 py-4 space-y-1 overflow-y-auto">
          <!-- Rendered dynamically -->
        </nav>

        <!-- Sidebar Footer -->
        <div class="p-4 border-t border-white/10 space-y-2">
          <button onclick="showPwaHelpModal()" class="w-full py-2.5 px-3 rounded-lg bg-white/5 hover:bg-white/10 text-slate-200 text-xs font-bold flex items-center justify-center gap-2 transition border border-white/10">
            <i data-lucide="smartphone" class="w-4 h-4 theme-text-accent"></i>
            <span>Install Aplikasi PWA</span>
          </button>
          <button onclick="handleLogout()" class="w-full py-2.5 px-3 rounded-lg bg-rose-500/15 hover:bg-rose-600 text-rose-300 hover:text-white text-xs font-bold flex items-center justify-center gap-2 transition">
            <i data-lucide="log-out" class="w-4 h-4"></i>
            <span>Keluar / Logout</span>
          </button>
        </div>
      </aside>

      <!-- MAIN CONTENT AREA -->
      <div class="flex-1 md:pl-64 lg:pl-72 flex flex-col min-h-screen pb-24 md:pb-8">

        <!-- TOP ANNOUNCEMENT / STATUS BAR (PRINTX STYLE) -->
        <div class="theme-bg-primary text-white/90 px-4 md:px-8 py-1.5 text-[11px] flex items-center justify-between border-b border-white/10">
          <div class="flex items-center gap-2 truncate">
            <span class="px-2 py-0.5 rounded bg-amber-400 text-slate-950 font-extrabold text-[9px] uppercase">INFO</span>
            <span id="topBarShopAddress" class="truncate text-white/80">Jl. A. Yani Km. 5 No. 88 • Telp: 0812-5500-8899</span>
          </div>
          <div class="flex items-center gap-2 shrink-0">
            <span id="headerPreviewBadge" class="hidden px-2 py-0.5 rounded bg-amber-400 text-slate-950 font-extrabold text-[10px]">MODE PREVIEW</span>
            <span id="networkStatusBadge" class="flex items-center gap-1 text-[10px] font-bold text-emerald-400">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Online
            </span>
          </div>
        </div>

        <!-- STICKY GLASS HEADER -->
        <header class="sticky top-0 z-[1000005] bg-white/90 backdrop-blur-md border-b border-slate-200 px-4 md:px-8 py-3 flex items-center justify-between gap-3">
          <div class="flex items-center gap-3">
            <div id="mobileHeaderLogo" class="md:hidden w-10 h-10 rounded-xl theme-bg-primary flex items-center justify-center text-white overflow-hidden shrink-0 shadow">
              <i data-lucide="printer" class="w-5 h-5 theme-text-accent"></i>
            </div>
            <div>
              <h1 id="pageTitle" class="font-printx font-extrabold text-base md:text-lg text-slate-900 uppercase tracking-tight leading-tight">Dashboard</h1>
              <p id="pageSubtitle" class="text-[11px] text-slate-500 hidden sm:block">Ringkasan operasional, stok & jadwal produksi</p>
            </div>
          </div>

          <div class="flex items-center gap-2.5">
            <!-- Quick POS Shortcut Button -->
            <button onclick="navigateTo('pos')" class="hidden sm:flex items-center gap-1.5 px-3.5 py-2 rounded-lg theme-btn-accent font-extrabold text-xs shadow-sm">
              <i data-lucide="plus-circle" class="w-4 h-4"></i>
              <span>KASIR BARU</span>
            </button>

            <!-- Unified Notification Bell (Low Stock + Deadline < 3 Days) -->
            <div class="relative">
              <button onclick="toggleNotificationDropdown()" class="relative p-2.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 border border-slate-200 transition" title="Peringatan Stok & Deadline">
                <i data-lucide="bell" class="w-4 h-4"></i>
                <span id="headerNotifCount" class="hidden absolute -top-1.5 -right-1.5 min-w-[20px] h-5 px-1 rounded-full bg-rose-600 text-white text-[10px] font-extrabold flex items-center justify-center shadow">0</span>
              </button>

              <!-- Notification Dropdown -->
              <div id="notifDropdown" class="hidden absolute right-0 mt-2 w-80 sm:w-96 bg-white rounded-2xl shadow-2xl border border-slate-200 overflow-hidden z-[1000020] fade-in">
                <div class="px-4 py-3 theme-bg-primary text-white flex items-center justify-between">
                  <span class="font-bold text-xs flex items-center gap-1.5">
                    <i data-lucide="bell-ring" class="w-4 h-4 theme-text-accent"></i>
                    Notifikasi Stok & Deadline (< 3 Hari)
                  </span>
                  <button onclick="toggleNotificationDropdown()" class="text-slate-300 hover:text-white"><i data-lucide="x" class="w-4 h-4"></i></button>
                </div>
                <div id="notifDropdownBody" class="max-h-80 overflow-y-auto divide-y divide-slate-100 text-xs"></div>
              </div>
            </div>

            <!-- Mobile Logout -->
            <button onclick="handleLogout()" class="md:hidden p-2.5 rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-100 border border-rose-200" title="Logout">
              <i data-lucide="log-out" class="w-4 h-4"></i>
            </button>
          </div>
        </header>

        <!-- DYNAMIC VIEWPORT CONTAINER -->
        <main id="appContent" class="flex-1 p-4 md:p-7 max-w-7xl w-full mx-auto">
          <!-- Views rendered dynamically -->
        </main>
      </div>

      <!-- FLOATING GLASSMORPHIC BOTTOM NAVIGATION BAR (MOBILE) -->
      <nav id="mobileBottomNav" class="md:hidden fixed bottom-3 inset-x-3 bg-slate-950/92 backdrop-blur-xl border border-white/15 rounded-2xl z-[1000015] flex items-center justify-around py-2 px-1 shadow-2xl">
        <!-- Rendered dynamically -->
      </nav>
    </div>

    <!-- ==================== MODALS ==================== -->

    <!-- 1. MODAL NOTA / STRUK DIGITAL (THERMAL, PDF FORMAL, WORD .DOC & WHATSAPP) -->
    <div id="receiptModal" class="hidden fixed inset-0 z-[1000035] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4 overflow-y-auto">
      <div class="bg-white rounded-2xl max-w-lg w-full shadow-2xl overflow-hidden border border-slate-200 my-auto fade-in">
        <div class="px-5 py-4 theme-bg-primary text-white flex items-center justify-between border-b-2 border-amber-400">
          <div class="flex items-center gap-2">
            <i data-lucide="receipt" class="w-4 h-4 theme-text-accent"></i>
            <h3 class="font-bold text-sm uppercase tracking-wide">Nota / Struk Digital</h3>
          </div>
          <button onclick="closeModal('receiptModal')" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>

        <!-- Thermal Preview -->
        <div class="p-5 bg-slate-100 max-h-[55vh] overflow-y-auto">
          <div id="receiptPrintArea" class="bg-white p-5 mx-auto max-w-[320px] shadow-sm border border-slate-300 font-mono text-xs text-slate-900 leading-relaxed"></div>
        </div>

        <!-- 4 Action Buttons -->
        <div class="p-4 bg-white border-t border-slate-200 space-y-2.5">
          <div class="grid grid-cols-2 gap-2.5">
            <button onclick="printTargetSection('receipt')" class="py-2.5 px-3 theme-bg-primary text-white font-bold rounded-lg text-xs flex items-center justify-center gap-2 shadow-sm hover:opacity-95 transition">
              <i data-lucide="printer" class="w-4 h-4 theme-text-accent"></i>
              <span>Cetak Thermal</span>
            </button>
            <button id="btnShareWaReceipt" class="py-2.5 px-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-lg text-xs flex items-center justify-center gap-2 shadow-sm transition">
              <i data-lucide="message-circle" class="w-4 h-4"></i>
              <span>Kirim WhatsApp</span>
            </button>
          </div>
          <div class="grid grid-cols-2 gap-2.5">
            <button id="btnPrintPdfReceipt" class="py-2.5 px-3 bg-rose-600 hover:bg-rose-700 text-white font-bold rounded-lg text-xs flex items-center justify-center gap-2 shadow-sm transition">
              <i data-lucide="file-check" class="w-4 h-4"></i>
              <span>Print / PDF Nota</span>
            </button>
            <button id="btnDownloadWordReceipt" class="py-2.5 px-3 theme-btn-accent font-extrabold rounded-lg text-xs flex items-center justify-center gap-2 shadow-sm">
              <i data-lucide="file-text" class="w-4 h-4"></i>
              <span>Download Word (.doc)</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- 2. MODAL VALIDASI & JADWAL ORDER (ADMIN UTAMA) -->
    <div id="orderValidationModal" class="hidden fixed inset-0 z-[1000035] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4">
      <div class="bg-white rounded-2xl max-w-lg w-full shadow-2xl overflow-hidden border border-slate-200 fade-in">
        <div class="px-6 py-4 theme-bg-primary text-white flex items-center justify-between border-b-2 border-amber-400">
          <h3 class="font-bold text-sm uppercase flex items-center gap-2">
            <i data-lucide="calendar-check" class="w-5 h-5 theme-text-accent"></i>
            <span>Validasi & Jadwal Produksi</span>
          </h3>
          <button onclick="closeModal('orderValidationModal')" class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>
        <form onsubmit="submitOrderValidation(event)" class="p-6 space-y-4">
          <input type="hidden" id="valOrderId" />
          <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 text-xs space-y-1">
            <div class="flex justify-between"><span class="text-slate-500">No. Invoice:</span><span class="font-bold text-slate-900" id="valOrderInfoId">-</span></div>
            <div class="flex justify-between"><span class="text-slate-500">Pelanggan:</span><span class="font-bold text-slate-900" id="valOrderInfoCust">-</span></div>
            <div class="pt-1 border-t border-slate-200 mt-1"><span class="text-slate-500 block">Pesanan Jasa:</span><span class="font-bold text-slate-900" id="valOrderInfoItem">-</span></div>
          </div>

          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1.5">Status Orderan</label>
            <select id="valOrderStatus" required class="w-full p-3 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold">
              <option value="Menunggu Validasi">⏳ Menunggu Validasi</option>
              <option value="Diproses">🖨️ Diproses / Dikerjakan</option>
              <option value="Selesai">✅ Selesai (Siap Diambil)</option>
              <option value="Batal">❌ Dibatalkan</option>
            </select>
          </div>

          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1.5">Tanggal Jadwal Pengerjaan / Deadline</label>
            <input type="date" id="valOrderSchedule" required class="w-full p-3 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold" />
          </div>

          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1.5">Catatan Desain / Operator</label>
            <textarea id="valOrderNote" rows="2" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-lg text-sm"></textarea>
          </div>

          <div class="flex justify-end gap-2 pt-2">
            <button type="button" onclick="closeModal('orderValidationModal')" class="px-4 py-2.5 rounded-lg bg-slate-100 text-slate-700 font-bold text-xs">Batal</button>
            <button type="submit" class="px-5 py-2.5 rounded-lg theme-btn-accent font-extrabold text-xs shadow">Simpan Validasi</button>
          </div>
        </form>
      </div>
    </div>

    <!-- 3. MODAL PELUNASAN DP -->
    <div id="pelunasanModal" class="hidden fixed inset-0 z-[1000035] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4">
      <div class="bg-white rounded-2xl max-w-md w-full shadow-2xl overflow-hidden border border-slate-200 fade-in">
        <div class="px-6 py-4 theme-btn-accent flex items-center justify-between">
          <h3 class="font-extrabold text-sm uppercase flex items-center gap-2">
            <i data-lucide="coins" class="w-5 h-5"></i>
            <span>Pelunasan Tagihan DP</span>
          </h3>
          <button onclick="closeModal('pelunasanModal')" class="w-8 h-8 rounded-full bg-black/10 flex items-center justify-center">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>
        <form onsubmit="submitPelunasan(event)" class="p-6 space-y-4">
          <input type="hidden" id="lunasInvoiceNo" />
          <div class="p-4 rounded-xl bg-amber-50 border border-amber-200 space-y-1.5 text-xs">
            <div class="flex justify-between"><span class="text-slate-600">No. Invoice:</span><span class="font-bold text-slate-900" id="lunasInfoInv">-</span></div>
            <div class="flex justify-between"><span class="text-slate-600">Pelanggan:</span><span class="font-bold text-slate-900" id="lunasInfoCust">-</span></div>
            <div class="flex justify-between"><span class="text-slate-600">Total Tagihan:</span><span class="font-bold text-slate-900" id="lunasInfoTotal">Rp 0</span></div>
            <div class="flex justify-between"><span class="text-slate-600">Sudah DP:</span><span class="font-bold text-emerald-700" id="lunasInfoPaid">Rp 0</span></div>
            <div class="flex justify-between pt-2 border-t border-amber-200 text-sm">
              <span class="font-bold text-rose-700">Sisa Pelunasan:</span>
              <span class="font-extrabold text-rose-700" id="lunasInfoSisa">Rp 0</span>
            </div>
          </div>

          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1.5">Metode Pelunasan</label>
            <select id="lunasMetode" class="w-full p-3 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold">
              <option value="Tunai">💵 Tunai / Cash</option>
              <option value="Transfer Bank">🏦 Transfer Bank</option>
              <option value="QRIS">📱 QRIS</option>
            </select>
          </div>

          <div class="flex justify-end gap-2 pt-2">
            <button type="button" onclick="closeModal('pelunasanModal')" class="px-4 py-2.5 rounded-lg bg-slate-100 text-slate-700 font-bold text-xs">Batal</button>
            <button type="submit" class="px-5 py-2.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow">Konfirmasi Lunas</button>
          </div>
        </form>
      </div>
    </div>

    <!-- 4. MODAL TAMBAH / EDIT KATALOG ATK & JASA -->
    <div id="productModal" class="hidden fixed inset-0 z-[1000035] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4 overflow-y-auto">
      <div class="bg-white rounded-2xl max-w-lg w-full shadow-2xl overflow-hidden border border-slate-200 my-auto fade-in">
        <div class="px-6 py-4 theme-bg-primary text-white flex items-center justify-between border-b-2 border-amber-400">
          <h3 id="productModalTitle" class="font-bold text-sm uppercase">Tambah Item ATK / Jasa</h3>
          <button onclick="closeModal('productModal')" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>
        <form onsubmit="submitProductForm(event)" class="p-6 space-y-4">
          <input type="hidden" id="prodId" />
          <div class="grid grid-cols-2 gap-3">
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Kategori</label>
              <select id="prodKategori" onchange="toggleStokField()" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold">
                <option value="ATK">ATK (Barang Fisik)</option>
                <option value="Jasa">Jasa Percetakan</option>
              </select>
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Satuan</label>
              <select id="prodSatuan" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold">
                <option value="Pcs">Pcs</option>
                <option value="Rim">Rim</option>
                <option value="Pack">Pack</option>
                <option value="Lembar">Lembar</option>
                <option value="Meter">Meter</option>
                <option value="Paket">Paket</option>
                <option value="Buku">Buku</option>
              </select>
            </div>
          </div>

          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Nama Barang ATK / Jenis Jasa *</label>
            <input type="text" id="prodNama" required placeholder="Contoh: Kertas HVS A4 / Cetak Spanduk Flexi" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-medium" />
          </div>

          <div class="grid grid-cols-2 gap-3">
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Harga Modal / HPP (Rp) *</label>
              <input type="number" id="prodModal" required min="0" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold" />
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Harga Jual (Rp) *</label>
              <input type="number" id="prodJual" required min="0" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold" />
            </div>
          </div>

          <div id="prodStokWrapper" class="grid grid-cols-2 gap-3">
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Stok Saat Ini</label>
              <input type="number" id="prodStok" min="0" value="10" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold" />
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Batas Min. Stok (Alert)</label>
              <input type="number" id="prodMinStok" min="1" value="5" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold" />
            </div>
          </div>

          <div class="flex justify-end gap-2 pt-2">
            <button type="button" onclick="closeModal('productModal')" class="px-4 py-2.5 rounded-lg bg-slate-100 text-slate-700 font-bold text-xs">Batal</button>
            <button type="submit" class="px-5 py-2.5 rounded-lg theme-btn-accent font-extrabold text-xs shadow">Simpan Katalog</button>
          </div>
        </form>
      </div>
    </div>

    <!-- 5. MODAL TAMBAH / EDIT USER KARYAWAN -->
    <div id="employeeModal" class="hidden fixed inset-0 z-[1000035] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4">
      <div class="bg-white rounded-2xl max-w-md w-full shadow-2xl overflow-hidden border border-slate-200 fade-in">
        <div class="px-6 py-4 theme-bg-primary text-white flex items-center justify-between border-b-2 border-amber-400">
          <h3 id="employeeModalTitle" class="font-bold text-sm uppercase">Tambah User Karyawan</h3>
          <button onclick="closeModal('employeeModal')" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>
        <form onsubmit="submitEmployeeForm(event)" class="p-6 space-y-3.5">
          <input type="hidden" id="empId" />
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Nama Lengkap Karyawan *</label>
            <input type="text" id="empNama" required placeholder="Contoh: Siti Aminah" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-medium" />
          </div>
          <div class="grid grid-cols-2 gap-3">
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Username Login *</label>
              <input type="text" id="empUser" required placeholder="kasir1" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-semibold" />
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Password *</label>
              <input type="text" id="empPass" required placeholder="123456" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-semibold" />
            </div>
          </div>
          <div class="grid grid-cols-2 gap-3">
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Jabatan</label>
              <input type="text" id="empJabatan" required placeholder="Kasir / Operator" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm" />
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Gaji Pokok (Rp)</label>
              <input type="number" id="empGaji" required min="0" value="2500000" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold" />
            </div>
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Status Akun</label>
            <select id="empStatus" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold">
              <option value="Aktif">Aktif (Dapat Login)</option>
              <option value="Nonaktif">Nonaktif (Diblokir)</option>
            </select>
          </div>
          <div class="flex justify-end gap-2 pt-2">
            <button type="button" onclick="closeModal('employeeModal')" class="px-4 py-2.5 rounded-lg bg-slate-100 text-slate-700 font-bold text-xs">Batal</button>
            <button type="submit" class="px-5 py-2.5 rounded-lg theme-btn-accent font-extrabold text-xs shadow">Simpan Karyawan</button>
          </div>
        </form>
      </div>
    </div>

    <!-- 6. MODAL EDIT PEMBAYARAN GAJI -->
    <div id="editGajiModal" class="hidden fixed inset-0 z-[1000035] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4">
      <div class="bg-white rounded-2xl max-w-md w-full shadow-2xl overflow-hidden border border-slate-200 fade-in">
        <div class="px-6 py-4 bg-emerald-700 text-white flex items-center justify-between">
          <h3 class="font-bold text-sm uppercase flex items-center gap-2">
            <i data-lucide="file-pen-line" class="w-4 h-4"></i>
            <span>Edit Pembayaran Gaji</span>
          </h3>
          <button onclick="closeModal('editGajiModal')" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>
        <form onsubmit="submitEditGaji(event)" class="p-6 space-y-3.5">
          <input type="hidden" id="editGajiId" />
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Nama Karyawan</label>
            <input type="text" id="editGajiNama" readonly class="w-full p-2.5 bg-slate-100 border border-slate-200 rounded-lg text-sm font-bold text-slate-600" />
          </div>
          <div class="grid grid-cols-2 gap-3">
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Periode Bulan</label>
              <input type="month" id="editGajiPeriode" required class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
            </div>
            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">Tanggal Bayar</label>
              <input type="date" id="editGajiTanggal" required class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
            </div>
          </div>
          <div class="grid grid-cols-3 gap-2">
            <div>
              <label class="block text-[11px] font-bold text-slate-700 mb-1">Gaji Pokok</label>
              <input type="number" id="editGajiPokok" required min="0" class="w-full p-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
            </div>
            <div>
              <label class="block text-[11px] font-bold text-slate-700 mb-1">Bonus</label>
              <input type="number" id="editGajiBonus" min="0" class="w-full p-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
            </div>
            <div>
              <label class="block text-[11px] font-bold text-slate-700 mb-1">Potongan</label>
              <input type="number" id="editGajiPotongan" min="0" class="w-full p-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
            </div>
          </div>
          <div>
            <label class="block text-xs font-bold text-slate-700 mb-1">Catatan Slip Gaji</label>
            <input type="text" id="editGajiCatatan" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs" />
          </div>
          <div class="flex justify-end gap-2 pt-2">
            <button type="button" onclick="closeModal('editGajiModal')" class="px-4 py-2.5 rounded-lg bg-slate-100 text-slate-700 font-bold text-xs">Batal</button>
            <button type="submit" class="px-5 py-2.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow">Update Slip Gaji</button>
          </div>
        </form>
      </div>
    </div>

    <!-- 7. MODAL SLIP GAJI KARYAWAN BERKOP TOKO -->
    <div id="slipGajiModal" class="hidden fixed inset-0 z-[1000035] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4 overflow-y-auto">
      <div class="bg-white rounded-2xl max-w-xl w-full shadow-2xl overflow-hidden border border-slate-200 my-auto fade-in">
        <div class="px-6 py-4 theme-bg-primary text-white flex items-center justify-between border-b-2 border-amber-400">
          <div class="flex items-center gap-2">
            <i data-lucide="file-text" class="w-4 h-4 theme-text-accent"></i>
            <h3 class="font-bold text-sm uppercase">Slip Gaji Karyawan</h3>
          </div>
          <button onclick="closeModal('slipGajiModal')" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>

        <div class="p-6 bg-slate-100 max-h-[68vh] overflow-y-auto">
          <div id="slipGajiPrintArea" class="bg-white p-7 shadow-sm border border-slate-300 text-slate-900 text-xs"></div>
        </div>

        <div class="p-4 bg-white border-t border-slate-200 grid grid-cols-2 gap-3">
          <button onclick="printTargetSection('slip')" class="py-3 px-4 theme-bg-primary text-white font-bold rounded-lg text-xs flex items-center justify-center gap-2 shadow">
            <i data-lucide="printer" class="w-4 h-4 theme-text-accent"></i>
            <span>Cetak / PDF Slip Gaji</span>
          </button>
          <button id="btnShareWaSlipGaji" class="py-3 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-lg text-xs flex items-center justify-center gap-2 shadow">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Kirim Slip ke WA</span>
          </button>
        </div>
      </div>
    </div>

    <!-- 8. MODAL PWA INSTALL GUIDE -->
    <div id="pwaHelpModal" class="hidden fixed inset-0 z-[1000035] bg-slate-950/75 backdrop-blur-sm flex items-center justify-center p-4">
      <div class="bg-white rounded-2xl max-w-md w-full shadow-2xl overflow-hidden border border-slate-200 fade-in">
        <div class="px-6 py-4 theme-bg-primary text-white flex items-center justify-between border-b-2 border-amber-400">
          <h3 class="font-bold text-sm uppercase flex items-center gap-2">
            <i data-lucide="smartphone" class="w-5 h-5 theme-text-accent"></i>
            <span>Install Aplikasi ke Perangkat</span>
          </h3>
          <button onclick="closeModal('pwaHelpModal')" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center">
            <i data-lucide="x" class="w-4 h-4"></i>
          </button>
        </div>
        <div class="p-6 space-y-3.5 text-xs text-slate-700 leading-relaxed">
          <div id="pwaDirectInstallBox" class="hidden p-3.5 rounded-xl bg-amber-50 border border-amber-200 flex items-center justify-between gap-3">
            <span class="font-bold text-slate-900">Instalasi langsung tersedia!</span>
            <button onclick="triggerPwaInstall()" class="px-3.5 py-2 theme-btn-accent font-extrabold rounded-lg shrink-0">Install Sekarang</button>
          </div>
          <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
            <p class="font-extrabold text-slate-900 mb-1">📱 Android (Chrome / Edge)</p>
            <p>Ketuk ikon <strong>Titik Tiga (⋮)</strong> di pojok kanan atas, lalu pilih <strong>"Tambahkan ke Layar Utama"</strong>.</p>
          </div>
          <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
            <p class="font-extrabold text-slate-900 mb-1">🍎 iPhone / iPad (Safari)</p>
            <p>Ketuk ikon <strong>Share (Bagikan)</strong> di bagian bawah layar, lalu pilih <strong>"Add to Home Screen"</strong>.</p>
          </div>
          <div class="p-3 rounded-xl bg-slate-50 border border-slate-200">
            <p class="font-extrabold text-slate-900 mb-1">💻 Desktop / PC Kasir (Chrome / Edge)</p>
            <p>Klik ikon <strong>Install (+)</strong> di ujung kanan kolom alamat URL browser.</p>
          </div>
        </div>
      </div>
    </div>

  </div><!-- END #app-root -->

  <!-- ==================== JAVASCRIPT MODULE (SUPABASE + PWA + UI LOGIC) ==================== -->
  <script type="module">
    import { createClient } from 'https://cdn.jsdelivr.net/npm/@supabase/supabase-js/+esm';

    // ==================== 1. SAKLAR PREVIEW & KONFIGURASI SUPABASE ====================
    const IS_PREVIEW = true; // Ubah menjadi false SAAT DEPLOY agar mode preview & data dummy hilang dan terhubung 100% ke Supabase
    const SUPABASE_URL = "URL_SUPABASE_ANDA";
    const SUPABASE_ANON_KEY = "ANON_KEY_ANDA";

    let supabase = null;
    if (!IS_PREVIEW && SUPABASE_URL.startsWith('http')) {
      supabase = createClient(SUPABASE_URL, SUPABASE_ANON_KEY);
    }

    // ==================== 2. SERVICE WORKER BLOB REGISTRATION ====================
    if ('serviceWorker' in navigator && window.location.protocol.startsWith('http')) {
      const swScript = `
        self.addEventListener('install', (e) => { self.skipWaiting(); });
        self.addEventListener('activate', (e) => { e.waitUntil(clients.claim()); });
        self.addEventListener('fetch', (e) => {
          e.respondWith(fetch(e.request).catch(() => caches.match(e.request)));
        });
      `;
      const swBlob = new Blob([swScript], { type: 'application/javascript' });
      navigator.serviceWorker.register(URL.createObjectURL(swBlob)).catch(() => {});
    }

    let deferredPrompt = null;
    window.addEventListener('beforeinstallprompt', (e) => {
      e.preventDefault();
      deferredPrompt = e;
      document.getElementById('pwaInstallBanner').classList.remove('hidden');
      document.getElementById('pwaDirectInstallBox').classList.remove('hidden');
    });

    window.triggerPwaInstall = function() {
      if (deferredPrompt) {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then(() => {
          deferredPrompt = null;
          document.getElementById('pwaInstallBanner').classList.add('hidden');
          closeModal('pwaHelpModal');
        });
      } else {
        showPwaHelpModal();
      }
    };

    window.dismissInstallBanner = function() {
      document.getElementById('pwaInstallBanner').classList.add('hidden');
    };

    window.showPwaHelpModal = function() {
      document.getElementById('pwaHelpModal').classList.remove('hidden');
      lucide.createIcons();
    };

    // ==================== 3. THEME PALETTES & DEFAULT DATA ====================
    const todayStr = new Date().toISOString().split('T')[0];
    const tomorrowStr = new Date(Date.now() + 86400000).toISOString().split('T')[0];

    const APP_THEMES = {
      'printx-navy': {
        id: 'printx-navy',
        name: 'PrintX Navy & Gold (Default)',
        desc: 'Deep Midnight Navy (#0B192C) dengan aksen Vibrant Gold (#FBBF24) berkarakter percetakan modern.',
        primary: '#0B192C',
        primaryMid: '#162B4D',
        primaryLight: '#E0F2FE',
        primaryText: '#0B192C',
        accent: '#FBBF24',
        accentHover: '#F59E0B',
        accentText: '#0B192C',
        sidebarBg: '#0B192C',
        bgBody: '#F8FAFC'
      },
      'emerald-mint': {
        id: 'emerald-mint',
        name: 'Emerald Mint & Gold',
        desc: 'Hijau zamrud gelap (#064E3B) dengan aksen emas segar; elegan dan nyaman dipandang.',
        primary: '#064E3B',
        primaryMid: '#047857',
        primaryLight: '#D1FAE5',
        primaryText: '#064E3B',
        accent: '#FBBF24',
        accentHover: '#F59E0B',
        accentText: '#064E3B',
        sidebarBg: '#022C22',
        bgBody: '#F0FDF4'
      },
      'crimson-ruby': {
        id: 'crimson-ruby',
        name: 'Crimson Ruby & Amber',
        desc: 'Merah marun tegas (#4C0519) dengan aksen amber cerah; energik dan berkelas.',
        primary: '#4C0519',
        primaryMid: '#9F1239',
        primaryLight: '#FFE4E6',
        primaryText: '#881337',
        accent: '#FBBF24',
        accentHover: '#F59E0B',
        accentText: '#4C0519',
        sidebarBg: '#3B0714',
        bgBody: '#FFF1F2'
      },
      'royal-indigo': {
        id: 'royal-indigo',
        name: 'Royal Indigo & Cyan',
        desc: 'Ungu indigo kreatif (#1E1B4B) dengan aksen biru cyan; cocok untuk studio desain grafis.',
        primary: '#1E1B4B',
        primaryMid: '#4338CA',
        primaryLight: '#E0E7FF',
        primaryText: '#312E81',
        accent: '#22D3EE',
        accentHover: '#06B6D4',
        accentText: '#083344',
        sidebarBg: '#17143B',
        bgBody: '#F5F3FF'
      },
      'slate-graphite': {
        id: 'slate-graphite',
        name: 'Slate Graphite & Orange',
        desc: 'Hitam arang industrial (#0F172A) dengan aksen oranye cerah (#FB923C).',
        primary: '#0F172A',
        primaryMid: '#334155',
        primaryLight: '#E2E8F0',
        primaryText: '#0F172A',
        accent: '#FB923C',
        accentHover: '#F97316',
        accentText: '#0F172A',
        sidebarBg: '#090D16',
        bgBody: '#F8FAFC'
      },
      'teal-ocean': {
        id: 'teal-ocean',
        name: 'Teal Ocean & Gold',
        desc: 'Biru kehijauan laut dalam (#134E4A) dengan aksen emas lembut.',
        primary: '#134E4A',
        primaryMid: '#0F766E',
        primaryLight: '#CCFBF1',
        primaryText: '#134E4A',
        accent: '#FACC15',
        accentHover: '#EAB308',
        accentText: '#134E4A',
        sidebarBg: '#042F2E',
        bgBody: '#F0FDFA'
      }
    };

    const EMPTY_SHOP_PROFILE = {
      id: 'default',
      nama_toko: 'K-Shop Apps',
      tagline: 'Percetakan Digital, Toko ATK & Jasa Profesional',
      alamat: 'Jl. A. Yani Km. 5 No. 88, Banjarmasin',
      telepon: '0812-5500-8899',
      catatan_nota: 'Terima kasih atas kepercayaan Anda! Simpan nota ini sebagai bukti pengambilan pesanan.',
      logo_url: '',
      tema_aktif: 'printx-navy'
    };

    // Minimalist Preview Data (Maksimal 2 baris per tabel, hanya aktif jika IS_PREVIEW = true)
    const PREVIEW_SEED_DB = {
      pengaturan_toko: { ...EMPTY_SHOP_PROFILE },
      karyawan: [
        { id: '11111111-1111-1111-1111-111111111111', nama_lengkap: 'Siti Aminah', username: 'kasir', password: '123', jabatan: 'Kasir & Operator Cetak', gaji_pokok: 2600000, status: 'Aktif' },
        { id: '22222222-2222-2222-2222-222222222222', nama_lengkap: 'Rizky Pratama', username: 'rizky', password: '123', jabatan: 'Desainer & Finishing', gaji_pokok: 2800000, status: 'Aktif' }
      ],
      produk_jasa: [
        { id: 'aaaa1111-1111-1111-1111-111111111111', kategori: 'ATK', nama_item: 'Kertas HVS A4 80gr Sinar Dunia', satuan: 'Rim', harga_modal: 46000, harga_jual: 55000, stok: 3, min_stok: 5 },
        { id: 'bbbb2222-2222-2222-2222-222222222222', kategori: 'Jasa', nama_item: 'Cetak Spanduk / Banner Flexi 280gr', satuan: 'Meter', harga_modal: 12000, harga_jual: 25000, stok: 999, min_stok: 0 }
      ],
      transaksi: [
        {
          id: 'trx-001',
          no_invoice: `INV-${todayStr.replace(/-/g, '')}-001`,
          tanggal: todayStr,
          nama_pelanggan: 'Bpk. Ahmad Fauzi',
          no_hp: '6281234567890',
          detail_item: [
            { id: 'bbbb2222-2222-2222-2222-222222222222', kategori: 'Jasa', nama_item: 'Cetak Spanduk / Banner Flexi 280gr', satuan: 'Meter', qty: 6, harga_modal: 12000, harga_jual: 25000, catatan: 'Ukuran 3x2m, Finishing Mata Ayam' }
          ],
          total_modal: 72000,
          total_tagihan: 150000,
          jumlah_bayar: 80000,
          sisa_tagihan: 70000,
          metode_bayar: 'Transfer Bank',
          status_bayar: 'DP',
          kasir: 'Siti Aminah'
        }
      ],
      order_jasa: [
        {
          id: 'ord-001',
          no_invoice: `INV-${todayStr.replace(/-/g, '')}-001`,
          tanggal_masuk: todayStr,
          nama_pelanggan: 'Bpk. Ahmad Fauzi',
          no_hp: '6281234567890',
          jenis_jasa: 'Cetak Spanduk / Banner Flexi 280gr',
          catatan_desain: 'Ukuran 3x2m, Finishing Mata Ayam',
          qty: 6,
          jadwal_pengerjaan: tomorrowStr,
          status_order: 'Menunggu Validasi',
          diinput_oleh: 'Siti Aminah',
          divalidasi_oleh: '-'
        }
      ],
      pembelian_atk: [
        { id: 'bli-001', tanggal: todayStr, supplier: 'CV. Borneo Paperindo', produk_id: 'aaaa1111-1111-1111-1111-111111111111', nama_item: 'Kertas HVS A4 80gr Sinar Dunia', qty_beli: 10, harga_beli_satuan: 46000, total_pengeluaran: 460000, admin_nama: 'Admin Utama' }
      ],
      penggajian: [
        { id: 'gji-001', tanggal_bayar: todayStr, bulan_periode: todayStr.slice(0, 7), karyawan_id: '11111111-1111-1111-1111-111111111111', nama_karyawan: 'Siti Aminah', jabatan: 'Kasir & Operator Cetak', gaji_pokok: 2600000, bonus_lembur: 200000, potongan: 0, total_dibayar: 2800000, catatan: 'Bonus lembur cetak spanduk' }
      ]
    };

    const EMPTY_DB = {
      pengaturan_toko: { ...EMPTY_SHOP_PROFILE },
      karyawan: [],
      produk_jasa: [],
      transaksi: [],
      order_jasa: [],
      pembelian_atk: [],
      penggajian: []
    };

    let appState = {
      currentUser: null, // { id, nama, role: 'Admin' | 'Karyawan', jabatan }
      loginRoleTab: 'admin',
      activeTab: 'dashboard',
      db: IS_PREVIEW ? JSON.parse(JSON.stringify(PREVIEW_SEED_DB)) : JSON.parse(JSON.stringify(EMPTY_DB)),
      cart: [],
      posFilterCat: 'Semua',
      posSearch: '',
      orderFilterStatus: 'Menunggu Validasi',
      orderFilterPay: 'Semua',
      orderSearch: '',
      katalogFilterCat: 'Semua',
      katalogSearch: '',
      reportStartDate: todayStr.slice(0, 8) + '01',
      reportEndDate: todayStr,
      reportSubTab: 'penjualan'
    };

    // ==================== 4. BRANDING, THEME & HELPERS ====================
    function getShopProfile() {
      return appState.db.pengaturan_toko || EMPTY_SHOP_PROFILE;
    }

    function applyAppTheme(themeId) {
      const t = APP_THEMES[themeId] || APP_THEMES['printx-navy'];
      const root = document.documentElement;
      root.style.setProperty('--primary', t.primary);
      root.style.setProperty('--primary-mid', t.primaryMid);
      root.style.setProperty('--primary-light', t.primaryLight);
      root.style.setProperty('--primary-text', t.primaryText);
      root.style.setProperty('--accent', t.accent);
      root.style.setProperty('--accent-hover', t.accentHover);
      root.style.setProperty('--accent-text', t.accentText);
      root.style.setProperty('--sidebar-bg', t.sidebarBg);
      root.style.setProperty('--bg-body', t.bgBody);

      const metaTheme = document.querySelector('meta[name="theme-color"]');
      if (metaTheme) metaTheme.setAttribute('content', t.primary);
    }

    function applyShopBranding() {
      const p = getShopProfile();
      applyAppTheme(p.tema_aktif || 'printx-navy');
      document.title = `${p.nama_toko} - Percetakan, ATK & Jasa`;

      const logoHtml = p.logo_url
        ? `<img src="${p.logo_url}" alt="Logo" class="w-full h-full object-cover" />`
        : `<i data-lucide="printer" class="w-6 h-6 theme-text-accent"></i>`;

      const loginLogo = document.getElementById('loginLogoContainer');
      if (loginLogo) {
        loginLogo.innerHTML = p.logo_url
          ? `<img src="${p.logo_url}" alt="Logo" class="w-full h-full object-cover" />`
          : `<i data-lucide="printer" class="w-10 h-10 theme-text-accent"></i>`;
      }

      const els = {
        loginShopName: p.nama_toko,
        loginShopTagline: p.tagline,
        sidebarShopName: p.nama_toko,
        sidebarShopTagline: p.tagline,
        pwaBannerTitle: `Install ${p.nama_toko}`,
        topBarShopAddress: `${p.alamat} • Telp/WA: ${p.telepon}`
      };

      Object.entries(els).forEach(([id, val]) => {
        const el = document.getElementById(id);
        if (el) el.textContent = val;
      });

      const sideLogo = document.getElementById('sidebarBrandLogo');
      const mobLogo = document.getElementById('mobileHeaderLogo');
      if (sideLogo) sideLogo.innerHTML = logoHtml;
      if (mobLogo) mobLogo.innerHTML = logoHtml;

      lucide.createIcons();
    }

    window.formatRupiah = function(num) {
      return 'Rp ' + Number(num || 0).toLocaleString('id-ID');
    };

    window.showToast = function(message, type = 'success') {
      const container = document.getElementById('toastContainer');
      const styles = {
        success: 'bg-emerald-600 text-white border-emerald-500',
        error: 'bg-rose-600 text-white border-rose-500',
        warning: 'bg-amber-400 text-slate-950 border-amber-500',
        info: 'theme-bg-primary text-white border-white/20'
      };
      const icons = {
        success: 'check-circle-2',
        error: 'alert-circle',
        warning: 'alert-triangle',
        info: 'info'
      };
      const el = document.createElement('div');
      el.className = `pointer-events-auto flex items-center gap-3 px-4 py-3 rounded-xl shadow-xl border text-xs font-bold fade-in ${styles[type] || styles.info}`;
      el.innerHTML = `<i data-lucide="${icons[type] || icons.info}" class="w-4 h-4 shrink-0"></i><span class="flex-1">${message}</span>`;
      container.appendChild(el);
      lucide.createIcons();
      setTimeout(() => {
        el.classList.add('opacity-0', '-translate-y-2');
        setTimeout(() => el.remove(), 300);
      }, 3200);
    };

    window.closeModal = function(id) {
      document.getElementById(id).classList.add('hidden');
    };

    window.showConfirmDialog = function(title, message, onConfirm) {
      document.getElementById('confirmDialogTitle').textContent = title;
      document.getElementById('confirmDialogMessage').textContent = message;
      document.getElementById('confirmDialogYesBtn').onclick = () => {
        closeModal('confirmDialogModal');
        onConfirm();
      };
      document.getElementById('confirmDialogModal').classList.remove('hidden');
      lucide.createIcons();
    };

    // ==================== 5. BULLETPROOF PRINT ENGINE ====================
    window.printTargetSection = function(mode, extraPayload = null) {
      const printContainer = document.getElementById('print-area-container');
      if (!printContainer) return;

      printContainer.className = '';
      let contentHtml = '';

      if (mode === 'receipt') {
        const src = document.getElementById('receiptPrintArea');
        if (!src) return;
        printContainer.className = 'thermal-paper';
        contentHtml = `<div style="padding: 4mm; background: #fff; color: #000;">${src.innerHTML}</div>`;
      } else if (mode === 'receipt-pdf' && extraPayload) {
        contentHtml = buildFormalReceiptDocumentHTML(extraPayload, false);
      } else if (mode === 'slip') {
        const src = document.getElementById('slipGajiPrintArea');
        if (!src) return;
        contentHtml = `<div style="padding: 8mm; background: #fff; color: #000; font-family: 'Plus Jakarta Sans', Arial, sans-serif;">${src.innerHTML}</div>`;
      } else if (mode === 'report') {
        const src = document.getElementById('reportPrintArea');
        if (!src) return;
        const clone = src.cloneNode(true);
        clone.querySelectorAll('.hidden').forEach(el => el.classList.remove('hidden'));
        clone.querySelectorAll('.no-print').forEach(el => el.remove());
        contentHtml = `<div style="padding: 6mm; background: #fff; color: #000; font-family: 'Plus Jakarta Sans', Arial, sans-serif;">${clone.innerHTML}</div>`;
      }

      printContainer.innerHTML = contentHtml;
      setTimeout(() => window.print(), 150);
    };

    window.addEventListener('afterprint', () => {
      const pc = document.getElementById('print-area-container');
      if (pc) {
        pc.innerHTML = '';
        pc.className = '';
      }
    });

    // ==================== 6. ALERTS (LOW STOCK & DEADLINE < 3 DAYS) ====================
    function getLowStockItems() {
      return appState.db.produk_jasa.filter(i => i.kategori === 'ATK' && Number(i.stok) <= Number(i.min_stok));
    }

    function getUrgentDeadlineOrders() {
      const now = new Date(todayStr + 'T00:00:00');
      const threeDaysMs = 3 * 24 * 60 * 60 * 1000;

      return appState.db.order_jasa
        .filter(o => o.status_order === 'Menunggu Validasi' || o.status_order === 'Diproses')
        .map(o => {
          const targetDate = new Date(o.jadwal_pengerjaan + 'T23:59:59');
          const diffMs = targetDate - now;
          const diffDays = Math.floor(diffMs / (1000 * 60 * 60 * 24));
          return { ...o, diffMs, diffDays };
        })
        .filter(o => o.diffMs <= threeDaysMs)
        .sort((a, b) => a.diffMs - b.diffMs);
    }

    function formatDeadlineLabel(o) {
      if (o.diffDays < 0) return `Terlambat ${Math.abs(o.diffDays)} hari`;
      if (o.diffDays === 0) return `Hari ini!`;
      return `${o.diffDays} hari lagi`;
    }

    function updateHeaderNotifications() {
      const lowItems = getLowStockItems();
      const urgentOrders = getUrgentDeadlineOrders();
      const total = lowItems.length + urgentOrders.length;

      const badge = document.getElementById('headerNotifCount');
      const body = document.getElementById('notifDropdownBody');

      if (total > 0) {
        badge.classList.remove('hidden');
        badge.textContent = total;
      } else {
        badge.classList.add('hidden');
      }

      if (total === 0) {
        body.innerHTML = `<div class="p-6 text-center text-slate-400">Tidak ada peringatan stok menipis atau deadline mendesak.</div>`;
        return;
      }

      let html = '';
      urgentOrders.forEach(o => {
        const isLate = o.diffDays < 0;
        html += `
          <div onclick="toggleNotificationDropdown(); navigateTo('orders')" class="p-3.5 hover:bg-amber-50 cursor-pointer transition flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg ${isLate ? 'bg-rose-100 text-rose-600' : 'bg-amber-100 text-amber-800'} flex items-center justify-center shrink-0 mt-0.5">
              <i data-lucide="clock-alert" class="w-4 h-4"></i>
            </div>
            <div class="flex-1">
              <div class="flex items-center justify-between gap-1">
                <span class="font-extrabold text-slate-900">${o.no_invoice}</span>
                <span class="px-1.5 py-0.5 rounded text-[10px] font-extrabold ${isLate ? 'bg-rose-600 text-white' : 'bg-amber-400 text-slate-950'}">${formatDeadlineLabel(o)}</span>
              </div>
              <p class="font-semibold text-slate-700 mt-0.5">${o.jenis_jasa} (${o.qty})</p>
              <p class="text-[11px] text-slate-500">Pelanggan: ${o.nama_pelanggan}</p>
            </div>
          </div>
        `;
      });

      lowItems.forEach(i => {
        html += `
          <div onclick="toggleNotificationDropdown(); navigateTo('dashboard')" class="p-3.5 hover:bg-rose-50 cursor-pointer transition flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg bg-rose-100 text-rose-600 flex items-center justify-center shrink-0 mt-0.5">
              <i data-lucide="package-minus" class="w-4 h-4"></i>
            </div>
            <div class="flex-1">
              <span class="font-extrabold text-rose-800">Stok ATK Menipis</span>
              <p class="font-semibold text-slate-800 mt-0.5">${i.nama_item}</p>
              <p class="text-[11px] text-rose-600 font-bold">Sisa ${i.stok} ${i.satuan} (Min: ${i.min_stok})</p>
            </div>
          </div>
        `;
      });

      body.innerHTML = html;
      lucide.createIcons();
    }

    window.toggleNotificationDropdown = function() {
      const dd = document.getElementById('notifDropdown');
      dd.classList.toggle('hidden');
      if (!dd.classList.contains('hidden')) updateHeaderNotifications();
    };

    // ==================== 7. SUPABASE DATA SYNC & AUTHENTICATION ====================
    window.switchLoginRoleTab = function(role) {
      appState.loginRoleTab = role;
      const tabAdmin = document.getElementById('tabLoginAdmin');
      const tabKaryawan = document.getElementById('tabLoginKaryawan');
      const label = document.getElementById('loginIdLabel');
      const input = document.getElementById('loginIdentifier');
      const icon = document.getElementById('loginIdIcon');

      if (role === 'admin') {
        tabAdmin.className = 'py-2.5 rounded-lg text-xs font-extrabold transition theme-bg-primary text-white shadow-sm';
        tabKaryawan.className = 'py-2.5 rounded-lg text-xs font-extrabold transition text-slate-600 hover:text-slate-900';
        label.textContent = 'Email Admin Utama';
        input.type = 'email';
        input.placeholder = 'admin@kshop.id';
        icon.setAttribute('data-lucide', 'mail');
      } else {
        tabKaryawan.className = 'py-2.5 rounded-lg text-xs font-extrabold transition theme-bg-primary text-white shadow-sm';
        tabAdmin.className = 'py-2.5 rounded-lg text-xs font-extrabold transition text-slate-600 hover:text-slate-900';
        label.textContent = 'Username Karyawan';
        input.type = 'text';
        input.placeholder = 'Masukkan username karyawan...';
        icon.setAttribute('data-lucide', 'user');
      }
      lucide.createIcons();
    };

    window.togglePasswordVisibility = function() {
      const inp = document.getElementById('loginPassword');
      const icon = document.getElementById('eyeIcon');
      if (inp.type === 'password') {
        inp.type = 'text';
        icon.setAttribute('data-lucide', 'eye-off');
      } else {
        inp.type = 'password';
        icon.setAttribute('data-lucide', 'eye');
      }
      lucide.createIcons();
    };

    window.quickPreviewLogin = function(role) {
      if (!IS_PREVIEW) return;
      if (role === 'admin') {
        appState.currentUser = { id: 'admin-preview', nama: 'Admin Utama (Owner)', role: 'Admin', jabatan: 'Owner / Admin Utama' };
      } else {
        const emp = appState.db.karyawan[0] || { id: 'k-1', nama_lengkap: 'Siti Aminah', jabatan: 'Kasir & Operator' };
        appState.currentUser = { id: emp.id, nama: emp.nama_lengkap, role: 'Karyawan', jabatan: emp.jabatan };
      }
      initAuthenticatedShell();
      showToast(`Masuk sebagai ${appState.currentUser.nama} (Mode Preview)`, 'success');
    };

    window.handleLogin = async function(e) {
      e.preventDefault();
      const identifier = document.getElementById('loginIdentifier').value.trim();
      const password = document.getElementById('loginPassword').value.trim();
      const btn = document.getElementById('btnLoginSubmit');

      btn.disabled = true;
      btn.innerHTML = `<span>MEMVERIFIKASI...</span>`;

      try {
        if (IS_PREVIEW) {
          if (appState.loginRoleTab === 'admin') {
            appState.currentUser = { id: 'admin-preview', nama: 'Admin Utama (Owner)', role: 'Admin', jabatan: 'Admin Utama' };
            initAuthenticatedShell();
            showToast('Login Admin berhasil (Mode Preview)', 'success');
          } else {
            const found = appState.db.karyawan.find(
              k => k.username.toLowerCase() === identifier.toLowerCase() && k.password === password && k.status === 'Aktif'
            );
            if (found) {
              appState.currentUser = { id: found.id, nama: found.nama_lengkap, role: 'Karyawan', jabatan: found.jabatan };
              initAuthenticatedShell();
              showToast(`Selamat datang, ${found.nama_lengkap}!`, 'success');
            } else {
              showToast('Username atau password karyawan salah / akun nonaktif!', 'error');
            }
          }
        } else {
          if (!supabase) throw new Error('Konfigurasi SUPABASE_URL dan SUPABASE_ANON_KEY belum diisi!');

          if (appState.loginRoleTab === 'admin') {
            const { data, error } = await supabase.auth.signInWithPassword({
              email: identifier,
              password: password
            });
            if (error) throw new Error('Email atau password Admin salah: ' + error.message);

            appState.currentUser = {
              id: data.user.id,
              nama: data.user.email.split('@')[0].toUpperCase() + ' (Admin Utama)',
              role: 'Admin',
              jabatan: 'Admin Utama'
            };
            await loadAllSupabaseData();
            initAuthenticatedShell();
            showToast('Login Admin Utama berhasil!', 'success');
          } else {
            const { data, error } = await supabase
              .from('karyawan')
              .select('*')
              .eq('username', identifier)
              .eq('password', password)
              .eq('status', 'Aktif')
              .maybeSingle();

            if (error) throw error;
            if (!data) throw new Error('Username atau password karyawan tidak valid / akun nonaktif.');

            sessionStorage.setItem('kshop_karyawan_session', JSON.stringify(data));
            appState.currentUser = {
              id: data.id,
              nama: data.nama_lengkap,
              role: 'Karyawan',
              jabatan: data.jabatan
            };
            await loadAllSupabaseData();
            initAuthenticatedShell();
            showToast(`Selamat bertugas, ${data.nama_lengkap}!`, 'success');
          }
        }
      } catch (err) {
        showToast(err.message, 'error');
      } finally {
        btn.disabled = false;
        btn.innerHTML = `<span>MASUK KE APLIKASI</span><i data-lucide="arrow-right" class="w-4 h-4"></i>`;
        lucide.createIcons();
      }
    };

    async function loadAllSupabaseData() {
      if (IS_PREVIEW || !supabase) return;
      try {
        const [
          resToko,
          resKaryawan,
          resProduk,
          resTrx,
          resOrder,
          resBeli,
          resGaji
        ] = await Promise.all([
          supabase.from('pengaturan_toko').select('*').eq('id', 'default').maybeSingle(),
          supabase.from('karyawan').select('*').order('created_at', { ascending: false }),
          supabase.from('produk_jasa').select('*').order('created_at', { ascending: false }),
          supabase.from('transaksi').select('*').order('created_at', { ascending: false }),
          supabase.from('order_jasa').select('*').order('created_at', { ascending: false }),
          supabase.from('pembelian_atk').select('*').order('created_at', { ascending: false }),
          supabase.from('penggajian').select('*').order('created_at', { ascending: false })
        ]);

        if (resToko.data) appState.db.pengaturan_toko = resToko.data;
        if (resKaryawan.data) appState.db.karyawan = resKaryawan.data;
        if (resProduk.data) appState.db.produk_jasa = resProduk.data;
        if (resTrx.data) appState.db.transaksi = resTrx.data;
        if (resOrder.data) appState.db.order_jasa = resOrder.data;
        if (resBeli.data) appState.db.pembelian_atk = resBeli.data;
        if (resGaji.data) appState.db.penggajian = resGaji.data;
      } catch (err) {
        showToast('Gagal memuat data dari Supabase: ' + err.message, 'error');
      }
    }

    window.handleLogout = async function() {
      if (!IS_PREVIEW && supabase) {
        await supabase.auth.signOut();
        sessionStorage.removeItem('kshop_karyawan_session');
      }
      appState.currentUser = null;
      appState.cart = [];
      document.getElementById('mainApp').classList.add('hidden');
      document.getElementById('loginScreen').classList.remove('hidden');
      document.getElementById('loginPassword').value = '';
      applyShopBranding();
      showToast('Anda telah keluar dari aplikasi.', 'info');
    };

    // ==================== 8. NAVIGATION SHELL ====================
    function initAuthenticatedShell() {
      document.getElementById('loginScreen').classList.add('hidden');
      document.getElementById('mainApp').classList.remove('hidden');

      const u = appState.currentUser;
      const isAdmin = u.role === 'Admin';

      document.getElementById('sidebarUserName').textContent = u.nama;
      document.getElementById('sidebarAvatar').textContent = u.nama.substring(0, 2).toUpperCase();
      document.getElementById('sidebarUserRole').textContent = isAdmin ? 'Admin Utama' : `Karyawan • ${u.jabatan}`;

      if (IS_PREVIEW) {
        document.getElementById('headerPreviewBadge').classList.remove('hidden');
      }

      applyShopBranding();
      renderNavigation();
      updateHeaderNotifications();
      navigateTo('dashboard');
    }

    function getMenuItems() {
      const isAdmin = appState.currentUser?.role === 'Admin';
      const base = [
        { id: 'dashboard', label: 'Dashboard', icon: 'layout-dashboard', sub: 'Ringkasan operasional, stok menipis & jadwal deadline' },
        { id: 'pos', label: 'Kasir / POS', icon: 'shopping-cart', sub: 'Transaksi ATK, jasa cetak & opsi langsung selesai' },
        { id: 'orders', label: 'Order & Jadwal', icon: 'clipboard-list', sub: 'Filter antrean validasi, produksi & pelunasan DP' }
      ];
      if (isAdmin) {
        base.push(
          { id: 'katalog', label: 'Katalog ATK & Jasa', icon: 'package', sub: 'Kelola harga modal, harga jual & stok barang' },
          { id: 'pembelian', label: 'Pembelian Stok', icon: 'package-plus', sub: 'Restock barang ATK dari supplier' },
          { id: 'karyawan', label: 'Karyawan & Gaji', icon: 'users', sub: 'Kelola user karyawan, pembayaran & slip gaji' },
          { id: 'laporan', label: 'Laporan KOP Surat', icon: 'file-spreadsheet', sub: 'Laporan keuangan resmi PDF, Word & Excel' },
          { id: 'profil', label: 'Profil Toko & Tema', icon: 'store', sub: 'Logo toko, identitas nota & tema warna website' }
        );
      }
      return base;
    }

    function renderNavigation() {
      const menus = getMenuItems();
      const desktopNav = document.getElementById('desktopNav');
      const mobileNav = document.getElementById('mobileBottomNav');

      desktopNav.innerHTML = menus.map(m => {
        const active = appState.activeTab === m.id;
        return `
          <button onclick="navigateTo('${m.id}')"
            class="w-full flex items-center gap-3 px-3.5 py-2.5 rounded-lg text-xs font-bold transition ${
              active
                ? 'theme-btn-accent shadow-md font-extrabold'
                : 'text-white/75 hover:bg-white/10 hover:text-white'
            }">
            <i data-lucide="${m.icon}" class="w-4 h-4 shrink-0"></i>
            <span class="truncate">${m.label}</span>
          </button>
        `;
      }).join('');

      // Mobile bottom nav (max 5 primary shortcuts or scrollable)
      mobileNav.innerHTML = menus.slice(0, 5).map(m => {
        const active = appState.activeTab === m.id;
        return `
          <button onclick="navigateTo('${m.id}')"
            class="flex flex-col items-center justify-center py-1 px-2 rounded-xl transition ${
              active ? 'theme-text-accent font-extrabold' : 'text-slate-400 font-medium'
            }">
            <i data-lucide="${m.icon}" class="w-4 h-4"></i>
            <span class="text-[9px] mt-0.5 truncate max-w-[54px]">${m.label.split(' ')[0]}</span>
          </button>
        `;
      }).join('') + (menus.length > 5 ? `
        <button onclick="navigateTo('profil')" class="flex flex-col items-center justify-center py-1 px-2 rounded-xl text-slate-400">
          <i data-lucide="settings" class="w-4 h-4"></i>
          <span class="text-[9px] mt-0.5">Lainnya</span>
        </button>
      ` : '');

      lucide.createIcons();
    }

    window.navigateTo = function(tabId) {
      appState.activeTab = tabId;
      const menus = getMenuItems();
      const current = menus.find(m => m.id === tabId) || menus[0];
      document.getElementById('pageTitle').textContent = current.label;
      document.getElementById('pageSubtitle').textContent = current.sub;

      renderNavigation();
      updateHeaderNotifications();

      const container = document.getElementById('appContent');
      switch (tabId) {
        case 'dashboard': renderDashboard(container); break;
        case 'pos': renderPOS(container); break;
        case 'orders': renderOrders(container); break;
        case 'katalog': renderKatalog(container); break;
        case 'pembelian': renderPembelianATK(container); break;
        case 'karyawan': renderKaryawanAndGaji(container); break;
        case 'laporan': renderLaporan(container); break;
        case 'profil': renderProfilToko(container); break;
      }
      lucide.createIcons();
      const rootEl = document.getElementById('app-root');
      if (rootEl) rootEl.scrollTo({ top: 0, behavior: 'smooth' });
    };

    // ==================== 9. DASHBOARD VIEW (PRINTX HERO BANNER + ALERTS) ====================
    function renderDashboard(container) {
      const isAdmin = appState.currentUser.role === 'Admin';
      const shop = getShopProfile();
      const lowItems = getLowStockItems();
      const urgentOrders = getUrgentDeadlineOrders();

      const todayTrx = appState.db.transaksi.filter(t => t.tanggal === todayStr);
      const omsetHariIni = todayTrx.reduce((s, t) => s + Number(t.total_tagihan || 0), 0);
      const modalHariIni = todayTrx.reduce((s, t) => s + Number(t.total_modal || 0), 0);
      const beliHariIni = appState.db.pembelian_atk.filter(b => b.tanggal === todayStr).reduce((s, b) => s + Number(b.total_pengeluaran || 0), 0);
      const gajiHariIni = appState.db.penggajian.filter(g => g.tanggal_bayar === todayStr).reduce((s, g) => s + Number(g.total_dibayar || 0), 0);
      const profitHariIni = omsetHariIni - modalHariIni - gajiHariIni;
      const totalPiutangDP = appState.db.transaksi.reduce((s, t) => s + Number(t.sisa_tagihan || 0), 0);

      const activeOrders = appState.db.order_jasa.filter(o => o.status_order === 'Menunggu Validasi' || o.status_order === 'Diproses');

      // Alert 1: Deadline < 3 Hari
      const deadlineAlertHtml = urgentOrders.length > 0 ? `
        <div class="mb-4 bg-amber-50 border-l-4 border-amber-500 rounded-xl p-4 shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-3 fade-in">
          <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-lg theme-btn-accent flex items-center justify-center shrink-0">
              <i data-lucide="clock-alert" class="w-5 h-5"></i>
            </div>
            <div>
              <h3 class="font-extrabold text-slate-900 text-xs uppercase">Peringatan Jadwal Jasa Mendekati Deadline (< 3 Hari) • ${urgentOrders.length} Order</h3>
              <div class="flex flex-wrap gap-1.5 mt-1.5">
                ${urgentOrders.map(o => `
                  <span class="px-2.5 py-1 rounded-md bg-white border ${o.diffDays < 0 ? 'border-rose-300 text-rose-700' : 'border-amber-300 text-slate-900'} text-[11px] font-bold">
                    ${o.no_invoice} (${o.jenis_jasa}) — <u>${formatDeadlineLabel(o)}</u>
                  </span>
                `).join('')}
              </div>
            </div>
          </div>
          <button onclick="navigateTo('orders')" class="px-4 py-2 theme-bg-primary text-white font-bold text-xs rounded-lg shrink-0">Cek Jadwal →</button>
        </div>
      ` : '';

      // Alert 2: Stok ATK Menipis
      const lowStockAlertHtml = lowItems.length > 0 ? `
        <div class="mb-5 bg-rose-50 border-l-4 border-rose-600 rounded-xl p-4 shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-3 fade-in">
          <div class="flex items-start gap-3">
            <div class="w-10 h-10 rounded-lg bg-rose-600 text-white flex items-center justify-center shrink-0">
              <i data-lucide="package-minus" class="w-5 h-5"></i>
            </div>
            <div>
              <h3 class="font-extrabold text-rose-900 text-xs uppercase">Peringatan Stok ATK Menipis (${lowItems.length} Item)</h3>
              <div class="flex flex-wrap gap-1.5 mt-1.5">
                ${lowItems.map(i => `
                  <span class="px-2.5 py-1 rounded-md bg-white border border-rose-200 text-rose-800 text-[11px] font-bold">
                    ${i.nama_item}: Sisa <u>${i.stok} ${i.satuan}</u> (Min: ${i.min_stok})
                  </span>
                `).join('')}
              </div>
            </div>
          </div>
          ${isAdmin ? `<button onclick="navigateTo('pembelian')" class="px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white font-bold text-xs rounded-lg shrink-0">+ Restock ATK</button>` : ''}
        </div>
      ` : '';

      container.innerHTML = `
        ${deadlineAlertHtml}
        ${lowStockAlertHtml}

        <!-- PRINTX STYLE HERO BANNER -->
        <div class="theme-hero-banner rounded-2xl p-6 md:p-8 text-white shadow-xl mb-6 relative overflow-hidden fade-in">
          <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-amber-400/15 rounded-full blur-2xl pointer-events-none"></div>
          <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
            <div class="space-y-2 max-w-xl">
              <span class="inline-block px-3 py-1 rounded bg-white/10 border border-white/15 text-[10px] font-extrabold uppercase tracking-widest theme-text-accent">
                ${shop.nama_toko} • SISTEM OPERASIONAL
              </span>
              <h2 class="font-printx text-2xl md:text-3xl font-black uppercase leading-tight">
                KELOLA <span class="theme-text-accent">PERCETAKAN & ATK</span> LEBIH CEPAT & AKURAT
              </h2>
              <p class="text-xs text-white/80 leading-relaxed">
                Pantau omset kasir, jadwal produksi percetakan, ketersediaan stok ATK, hingga laporan keuangan berkop surat secara real-time.
              </p>
              <div class="pt-2 flex flex-wrap gap-3">
                <button onclick="navigateTo('pos')" class="px-5 py-2.5 theme-btn-accent font-printx font-extrabold text-xs uppercase tracking-wider rounded-lg shadow-lg flex items-center gap-2">
                  <span>BUKA KASIR (POS)</span>
                  <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </button>
                <button onclick="navigateTo('orders')" class="px-5 py-2.5 bg-white/10 hover:bg-white/20 border border-white/20 text-white font-bold text-xs uppercase tracking-wider rounded-lg transition">
                  ANTREAN ORDER (${activeOrders.length})
                </button>
              </div>
            </div>

            <!-- Right Hero Highlight Box -->
            <div class="bg-white/10 backdrop-blur-md border border-white/15 rounded-xl p-5 min-w-[240px] text-center lg:text-right">
              <span class="text-[10px] font-extrabold uppercase tracking-wider text-white/70">${isAdmin ? 'OMSET HARI INI' : 'TRANSAKSI HARI INI'}</span>
              <div class="font-printx text-2xl md:text-3xl font-black theme-text-accent mt-1">
                ${isAdmin ? formatRupiah(omsetHariIni) : `${todayTrx.length} Nota`}
              </div>
              <p class="text-[11px] text-white/75 mt-1">Tanggal: ${todayStr}</p>
            </div>
          </div>
        </div>

        ${isAdmin ? `
          <!-- ADMIN METRIC CARDS -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6 fade-in">
            <div class="glass-card p-5 rounded-xl">
              <div class="flex items-center justify-between mb-2">
                <span class="text-[11px] font-extrabold text-slate-500 uppercase">Omset Hari Ini</span>
                <div class="w-9 h-9 rounded-lg theme-bg-primary text-amber-400 flex items-center justify-center"><i data-lucide="trending-up" class="w-4 h-4"></i></div>
              </div>
              <p class="text-xl font-extrabold text-slate-900">${formatRupiah(omsetHariIni)}</p>
              <p class="text-[11px] text-slate-500 mt-1">${todayTrx.length} transaksi tercatat</p>
            </div>

            <div class="glass-card p-5 rounded-xl">
              <div class="flex items-center justify-between mb-2">
                <span class="text-[11px] font-extrabold text-slate-500 uppercase">Profit Bersih Hari Ini</span>
                <div class="w-9 h-9 rounded-lg bg-emerald-600 text-white flex items-center justify-center"><i data-lucide="wallet" class="w-4 h-4"></i></div>
              </div>
              <p class="text-xl font-extrabold ${profitHariIni >= 0 ? 'text-emerald-600' : 'text-rose-600'}">${formatRupiah(profitHariIni)}</p>
              <p class="text-[11px] text-slate-500 mt-1">Omset - HPP - Gaji hari ini</p>
            </div>

            <div class="glass-card p-5 rounded-xl">
              <div class="flex items-center justify-between mb-2">
                <span class="text-[11px] font-extrabold text-slate-500 uppercase">Sisa Piutang DP</span>
                <div class="w-9 h-9 rounded-lg theme-btn-accent flex items-center justify-center"><i data-lucide="hourglass" class="w-4 h-4"></i></div>
              </div>
              <p class="text-xl font-extrabold text-amber-600">${formatRupiah(totalPiutangDP)}</p>
              <p class="text-[11px] text-slate-500 mt-1">Belum dilunasi pelanggan</p>
            </div>

            <div class="glass-card p-5 rounded-xl">
              <div class="flex items-center justify-between mb-2">
                <span class="text-[11px] font-extrabold text-slate-500 uppercase">Pengeluaran Hari Ini</span>
                <div class="w-9 h-9 rounded-lg bg-rose-600 text-white flex items-center justify-center"><i data-lucide="arrow-up-right" class="w-4 h-4"></i></div>
              </div>
              <p class="text-xl font-extrabold text-slate-900">${formatRupiah(beliHariIni + gajiHariIni)}</p>
              <p class="text-[11px] text-slate-500 mt-1">Belanja stok & gaji keluar</p>
            </div>
          </div>
        ` : ''}

        <!-- ACTIVE PRODUCTION QUEUE SUMMARY -->
        <div class="glass-card rounded-2xl p-6 fade-in">
          <div class="flex items-center justify-between mb-4">
            <div>
              <h3 class="font-printx font-extrabold text-sm uppercase text-slate-900">Antrean Order Percetakan Aktif</h3>
              <p class="text-xs text-slate-500">Daftar pesanan yang menunggu validasi atau sedang dikerjakan</p>
            </div>
            <button onclick="navigateTo('orders')" class="text-xs font-extrabold theme-text-primary hover:underline">Lihat Semua →</button>
          </div>

          ${activeOrders.length === 0 ? `
            <div class="py-10 text-center text-slate-400 text-xs">Belum ada antrean order aktif saat ini.</div>
          ` : `
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5">
              ${activeOrders.slice(0, 4).map(o => `
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between gap-3">
                  <div>
                    <div class="flex items-center gap-2">
                      <span class="font-extrabold text-xs text-slate-900">${o.no_invoice}</span>
                      <span class="px-2 py-0.5 rounded text-[10px] font-extrabold ${o.status_order === 'Menunggu Validasi' ? 'bg-amber-100 text-amber-800' : 'bg-sky-100 text-sky-800'}">${o.status_order}</span>
                    </div>
                    <p class="font-bold text-xs text-slate-800 mt-1">${o.jenis_jasa} (${o.qty})</p>
                    <p class="text-[11px] text-slate-500">Plg: ${o.nama_pelanggan} • Jadwal: <strong>${o.jadwal_pengerjaan}</strong></p>
                  </div>
                  ${isAdmin ? `
                    <button onclick="openOrderValidationModal('${o.id}')" class="px-3 py-2 rounded-lg theme-btn-accent font-extrabold text-[11px] shrink-0">Validasi</button>
                  ` : ''}
                </div>
              `).join('')}
            </div>
          `}
        </div>
      `;
    }

    // ==================== 10. KASIR / POS (PRINTX E-COMMERCE GRID STYLE) ====================
    function renderPOS(container) {
      const filtered = appState.db.produk_jasa.filter(item => {
        const matchCat = appState.posFilterCat === 'Semua' || item.kategori === appState.posFilterCat;
        const matchSearch = item.nama_item.toLowerCase().includes(appState.posSearch.toLowerCase());
        return matchCat && matchSearch;
      });

      const subtotal = appState.cart.reduce((s, c) => s + (Number(c.harga_jual) * c.qty), 0);
      const hasJasa = appState.cart.some(c => c.kategori === 'Jasa');

      container.innerHTML = `
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 fade-in">
          <!-- LEFT: PRINTX CATEGORY QUICK-TILES & PRODUCT CARDS -->
          <div class="lg:col-span-7 space-y-4">
            <!-- Category Quick-Tiles (PrintX Style) -->
            <div class="grid grid-cols-3 gap-3">
              ${[
                { id: 'Semua', label: 'SEMUA KATALOG', sub: 'ATK & Jasa', icon: 'layout-grid' },
                { id: 'ATK', label: 'BARANG ATK', sub: 'Alat Tulis & Kertas', icon: 'pen-tool' },
                { id: 'Jasa', label: 'JASA CETAK', sub: 'Banner, Print, Undangan', icon: 'printer' }
              ].map(cat => {
                const active = appState.posFilterCat === cat.id;
                return `
                  <button onclick="appState.posFilterCat='${cat.id}'; renderPOS(document.getElementById('appContent'))"
                    class="p-3.5 rounded-xl border text-center transition flex flex-col items-center justify-center gap-1.5 ${
                      active
                        ? 'theme-bg-primary text-white border-amber-400 shadow-lg'
                        : 'bg-white text-slate-800 border-slate-200 hover:border-amber-400 shadow-xs'
                    }">
                    <div class="w-9 h-9 rounded-lg ${active ? 'theme-btn-accent' : 'bg-slate-100 text-slate-800'} flex items-center justify-center">
                      <i data-lucide="${cat.icon}" class="w-4 h-4"></i>
                    </div>
                    <span class="font-printx font-extrabold text-[11px] uppercase tracking-tight">${cat.label}</span>
                    <span class="text-[10px] ${active ? 'text-white/70' : 'text-slate-400'} hidden sm:block">${cat.sub}</span>
                  </button>
                `;
              }).join('')}
            </div>

            <!-- Search Bar -->
            <div class="relative">
              <i data-lucide="search" class="w-4 h-4 absolute left-3.5 top-3.5 text-slate-400"></i>
              <input type="text" value="${appState.posSearch}" oninput="appState.posSearch=this.value; renderPOS(document.getElementById('appContent'))"
                placeholder="Cari produk ATK atau layanan percetakan..."
                class="w-full pl-10 pr-4 py-2.5 bg-white border border-slate-300 rounded-xl text-sm font-medium focus:outline-none focus:ring-2 focus:ring-amber-400 shadow-xs" />
            </div>

            <!-- PrintX Popular Products Style Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
              ${filtered.length === 0 ? `
                <div class="col-span-2 bg-white p-10 rounded-xl border border-slate-200 text-center text-slate-400 text-xs">
                  Belum ada data produk ATK atau jasa yang sesuai pencarian.
                </div>
              ` : filtered.map(item => {
                const isATK = item.kategori === 'ATK';
                const outOfStock = isATK && Number(item.stok) <= 0;
                const lowStock = isATK && Number(item.stok) > 0 && Number(item.stok) <= Number(item.min_stok);

                return `
                  <div class="bg-white rounded-xl border border-slate-200 p-4 shadow-xs hover:shadow-md transition flex flex-col justify-between ${outOfStock ? 'opacity-50' : ''}">
                    <div>
                      <div class="flex items-center justify-between gap-2 mb-2.5">
                        <span class="px-2 py-0.5 rounded text-[10px] font-extrabold uppercase ${isATK ? 'bg-sky-100 text-sky-900' : 'bg-amber-100 text-amber-900'}">
                          ${item.kategori}
                        </span>
                        ${isATK ? `
                          <span class="px-2 py-0.5 rounded text-[10px] font-bold ${outOfStock ? 'bg-slate-200 text-slate-600' : lowStock ? 'bg-rose-100 text-rose-700' : 'bg-emerald-50 text-emerald-700'}">
                            Stok: ${item.stok} ${item.satuan}
                          </span>
                        ` : `<span class="text-[10px] font-bold text-slate-400">Satuan: ${item.satuan}</span>`}
                      </div>
                      <h4 class="font-bold text-sm text-slate-900 leading-snug">${item.nama_item}</h4>
                      <div class="mt-2 flex items-baseline gap-1">
                        <span class="font-printx text-base font-black text-slate-900">${formatRupiah(item.harga_jual)}</span>
                        <span class="text-[11px] text-slate-400">/ ${item.satuan}</span>
                      </div>
                    </div>

                    <button type="button" ${outOfStock ? 'disabled' : ''} onclick="addToCart('${item.id}')"
                      class="mt-4 w-full py-2.5 rounded-lg font-printx font-extrabold text-[11px] uppercase tracking-wider flex items-center justify-center gap-1.5 shadow-xs ${
                        outOfStock ? 'bg-slate-200 text-slate-400 cursor-not-allowed' : 'theme-btn-accent'
                      }">
                      <i data-lucide="shopping-cart" class="w-3.5 h-3.5"></i>
                      <span>${outOfStock ? 'STOK HABIS' : 'TAMBAH KE KERANJANG'}</span>
                    </button>
                  </div>
                `;
              }).join('')}
            </div>
          </div>

          <!-- RIGHT: KERANJANG & CHECKOUT -->
          <div class="lg:col-span-5">
            <div class="bg-white rounded-2xl border border-slate-200 shadow-xl overflow-hidden sticky top-20">
              <div class="px-5 py-4 theme-bg-primary text-white flex items-center justify-between border-b-2 border-amber-400">
                <div class="flex items-center gap-2">
                  <i data-lucide="shopping-bag" class="w-4 h-4 theme-text-accent"></i>
                  <h3 class="font-printx font-extrabold text-xs uppercase tracking-wider">Keranjang Kasir</h3>
                </div>
                <span class="px-2.5 py-0.5 rounded-full bg-amber-400 text-slate-950 text-xs font-extrabold">${appState.cart.reduce((s, c) => s + c.qty, 0)} Item</span>
              </div>

              <!-- Cart Items -->
              <div class="p-4 max-h-60 overflow-y-auto space-y-2.5 border-b border-slate-200">
                ${appState.cart.length === 0 ? `
                  <div class="py-8 text-center text-slate-400 text-xs">
                    Klik tombol <strong>"Tambah ke Keranjang"</strong> pada katalog di samping.
                  </div>
                ` : appState.cart.map((c, idx) => `
                  <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
                    <div class="flex items-start justify-between gap-2">
                      <div>
                        <span class="text-[10px] font-extrabold uppercase ${c.kategori === 'Jasa' ? 'text-amber-700' : 'text-sky-700'}">${c.kategori}</span>
                        <h5 class="font-bold text-xs text-slate-900">${c.nama_item}</h5>
                        <p class="text-[11px] text-slate-500">${formatRupiah(c.harga_jual)} x ${c.qty} ${c.satuan} = <strong class="text-slate-900">${formatRupiah(c.harga_jual * c.qty)}</strong></p>
                      </div>
                      <button onclick="removeCartItem(${idx})" class="text-rose-500 hover:text-rose-700 p-1"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                    </div>
                    <div class="flex items-center gap-2">
                      <div class="flex items-center border border-slate-300 rounded-lg bg-white overflow-hidden">
                        <button type="button" onclick="updateCartQty(${idx}, -1)" class="px-2.5 py-1 font-bold text-xs hover:bg-slate-100">-</button>
                        <span class="px-2.5 py-1 text-xs font-extrabold">${c.qty}</span>
                        <button type="button" onclick="updateCartQty(${idx}, 1)" class="px-2.5 py-1 font-bold text-xs hover:bg-slate-100">+</button>
                      </div>
                      <input type="text" value="${c.catatan || ''}" onchange="appState.cart[${idx}].catatan=this.value"
                        placeholder="${c.kategori === 'Jasa' ? 'Ukuran / Bahan / Finishing...' : 'Catatan opsional...'}"
                        class="flex-1 px-2.5 py-1.5 bg-white border border-slate-300 rounded-lg text-[11px]" />
                    </div>
                  </div>
                `).join('')}
              </div>

              <!-- Checkout Form -->
              <form onsubmit="processCheckout(event)" class="p-5 space-y-3">
                <div class="grid grid-cols-2 gap-2.5">
                  <div>
                    <label class="block text-[11px] font-bold text-slate-600 mb-1">Nama Pelanggan *</label>
                    <input type="text" id="posCustName" required value="Pelanggan Umum" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-semibold" />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-600 mb-1">No. WhatsApp (Nota)</label>
                    <input type="tel" id="posCustPhone" placeholder="62812xxxx" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-semibold" />
                  </div>
                </div>

                ${hasJasa ? `
                  <div class="p-3 rounded-xl bg-amber-50 border border-amber-300 space-y-2">
                    <div>
                      <label class="block text-[11px] font-extrabold text-slate-900 mb-1">Status Pengerjaan Jasa Percetakan *</label>
                      <select id="posJasaStatusAwal" class="w-full px-3 py-2 bg-white border border-amber-300 rounded-lg text-xs font-extrabold text-slate-900">
                        <option value="Menunggu Validasi">⏳ Masuk Antrean (Menunggu Validasi)</option>
                        <option value="Selesai">✅ Langsung Selesai (Ambil di Tempat)</option>
                      </select>
                    </div>
                    <div>
                      <label class="block text-[11px] font-bold text-slate-700 mb-1">Tanggal Jadwal / Deadline Selesai *</label>
                      <input type="date" id="posJadwalSelesai" required value="${todayStr}" class="w-full px-3 py-2 bg-white border border-amber-300 rounded-lg text-xs font-bold" />
                    </div>
                  </div>
                ` : ''}

                <div class="grid grid-cols-2 gap-2.5">
                  <div>
                    <label class="block text-[11px] font-bold text-slate-600 mb-1">Metode Bayar</label>
                    <select id="posMetodeBayar" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold">
                      <option value="Tunai">💵 Tunai</option>
                      <option value="Transfer Bank">🏦 Transfer Bank</option>
                      <option value="QRIS">📱 QRIS</option>
                    </select>
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-600 mb-1">Status Pembayaran</label>
                    <select id="posStatusBayar" onchange="toggleDpInput(${subtotal})" class="w-full px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold">
                      <option value="Lunas">✅ Lunas Langsung</option>
                      <option value="DP">⏳ DP / Uang Muka</option>
                    </select>
                  </div>
                </div>

                <!-- DP Input Box -->
                <div id="posDpBox" class="hidden p-3 rounded-xl bg-sky-50 border border-sky-200 space-y-2">
                  <div class="flex justify-between items-center">
                    <label class="text-[11px] font-bold text-slate-800">Nominal DP (Rp)</label>
                    <input type="number" id="posNominalDp" min="1000" max="${subtotal}" value="${Math.round(subtotal / 2)}" oninput="calculateDpRemainder(${subtotal})"
                      class="w-32 px-2.5 py-1.5 bg-white border border-sky-300 rounded-lg text-xs font-extrabold text-right" />
                  </div>
                  <div class="flex justify-between text-xs font-bold text-rose-700 pt-1 border-t border-sky-200">
                    <span>Sisa Tagihan:</span>
                    <span id="posSisaTagihanText">${formatRupiah(subtotal - Math.round(subtotal / 2))}</span>
                  </div>
                </div>

                <!-- Total Box -->
                <div class="p-3.5 rounded-xl theme-bg-primary text-white flex items-center justify-between">
                  <span class="text-xs font-bold uppercase text-white/80">Total Tagihan</span>
                  <span class="font-printx text-xl font-black theme-text-accent">${formatRupiah(subtotal)}</span>
                </div>

                <button type="submit" ${appState.cart.length === 0 ? 'disabled' : ''}
                  class="w-full py-3.5 rounded-lg font-printx font-extrabold text-xs uppercase tracking-wider shadow-lg flex items-center justify-center gap-2 ${
                    appState.cart.length === 0 ? 'bg-slate-200 text-slate-400 cursor-not-allowed' : 'theme-btn-accent'
                  }">
                  <i data-lucide="check-circle-2" class="w-4 h-4"></i>
                  <span>PROSES TRANSAKSI & CETAK NOTA</span>
                </button>
              </form>
            </div>
          </div>
        </div>
      `;
      lucide.createIcons();
    }

    window.addToCart = function(itemId) {
      const prod = appState.db.produk_jasa.find(p => p.id === itemId);
      if (!prod) return;

      const exist = appState.cart.find(c => c.id === itemId);
      if (exist) {
        if (prod.kategori === 'ATK' && exist.qty + 1 > Number(prod.stok)) {
          showToast(`Stok ${prod.nama_item} tersisa ${prod.stok} ${prod.satuan}!`, 'warning');
          return;
        }
        exist.qty += 1;
      } else {
        appState.cart.push({
          id: prod.id,
          kategori: prod.kategori,
          nama_item: prod.nama_item,
          satuan: prod.satuan,
          harga_modal: Number(prod.harga_modal),
          harga_jual: Number(prod.harga_jual),
          qty: 1,
          catatan: ''
        });
      }
      renderPOS(document.getElementById('appContent'));
    };

    window.updateCartQty = function(idx, delta) {
      const item = appState.cart[idx];
      const prod = appState.db.produk_jasa.find(p => p.id === item.id);
      const next = item.qty + delta;
      if (next <= 0) {
        appState.cart.splice(idx, 1);
      } else {
        if (prod && prod.kategori === 'ATK' && next > Number(prod.stok)) {
          showToast(`Stok maksimal ${prod.stok} ${prod.satuan}`, 'warning');
          return;
        }
        item.qty = next;
      }
      renderPOS(document.getElementById('appContent'));
    };

    window.removeCartItem = function(idx) {
      appState.cart.splice(idx, 1);
      renderPOS(document.getElementById('appContent'));
    };

    window.toggleDpInput = function(subtotal) {
      const st = document.getElementById('posStatusBayar').value;
      const box = document.getElementById('posDpBox');
      if (st === 'DP') {
        box.classList.remove('hidden');
        calculateDpRemainder(subtotal);
      } else {
        box.classList.add('hidden');
      }
    };

    window.calculateDpRemainder = function(subtotal) {
      const dp = Number(document.getElementById('posNominalDp').value || 0);
      document.getElementById('posSisaTagihanText').textContent = formatRupiah(Math.max(0, subtotal - dp));
    };

    window.processCheckout = async function(e) {
      e.preventDefault();
      if (appState.cart.length === 0) return;

      const custName = document.getElementById('posCustName').value.trim() || 'Pelanggan Umum';
      let custPhone = document.getElementById('posCustPhone').value.trim().replace(/[^0-9]/g, '');
      if (custPhone.startsWith('0')) custPhone = '62' + custPhone.slice(1);

      const metode = document.getElementById('posMetodeBayar').value;
      const statusBayar = document.getElementById('posStatusBayar').value;
      const statusAwalEl = document.getElementById('posJasaStatusAwal');
      const jadwalEl = document.getElementById('posJadwalSelesai');

      const jasaStatusAwal = statusAwalEl ? statusAwalEl.value : 'Menunggu Validasi';
      const jadwalSelesai = jadwalEl ? jadwalEl.value : todayStr;

      const totalTagihan = appState.cart.reduce((s, c) => s + (c.harga_jual * c.qty), 0);
      const totalModal = appState.cart.reduce((s, c) => s + (c.harga_modal * c.qty), 0);

      let jumlahBayar = totalTagihan;
      let sisaTagihan = 0;
      if (statusBayar === 'DP') {
        jumlahBayar = Number(document.getElementById('posNominalDp').value || 0);
        if (jumlahBayar <= 0 || jumlahBayar >= totalTagihan) {
          showToast('Nominal DP harus lebih dari 0 dan kurang dari Total Tagihan!', 'warning');
          return;
        }
        sisaTagihan = totalTagihan - jumlahBayar;
      }

      const invNo = `INV-${todayStr.replace(/-/g, '')}-${String(appState.db.transaksi.length + 1).padStart(3, '0')}`;
      const itemsSnapshot = JSON.parse(JSON.stringify(appState.cart));

      const trxPayload = {
        no_invoice: invNo,
        tanggal: todayStr,
        nama_pelanggan: custName,
        no_hp: custPhone,
        detail_item: itemsSnapshot,
        total_modal: totalModal,
        total_tagihan: totalTagihan,
        jumlah_bayar: jumlahBayar,
        sisa_tagihan: sisaTagihan,
        metode_bayar: metode,
        status_bayar: statusBayar,
        kasir: appState.currentUser.nama
      };

      try {
        if (!IS_PREVIEW && supabase) {
          const { data: insertedTrx, error: trxErr } = await supabase.from('transaksi').insert([trxPayload]).select().single();
          if (trxErr) throw trxErr;
          appState.db.transaksi.unshift(insertedTrx);

          for (const item of itemsSnapshot) {
            if (item.kategori === 'ATK') {
              const prod = appState.db.produk_jasa.find(p => p.id === item.id);
              if (prod) {
                const newStok = Math.max(0, Number(prod.stok) - item.qty);
                await supabase.from('produk_jasa').update({ stok: newStok }).eq('id', prod.id);
                prod.stok = newStok;
              }
            } else if (item.kategori === 'Jasa') {
              const ordPayload = {
                no_invoice: invNo,
                tanggal_masuk: todayStr,
                nama_pelanggan: custName,
                no_hp: custPhone,
                jenis_jasa: item.nama_item,
                catatan_desain: item.catatan || (jasaStatusAwal === 'Selesai' ? 'Cetak Cepat / Langsung Selesai' : 'Sesuai standar cetak'),
                qty: item.qty,
                jadwal_pengerjaan: jadwalSelesai,
                status_order: jasaStatusAwal,
                diinput_oleh: appState.currentUser.nama,
                divalidasi_oleh: jasaStatusAwal === 'Selesai' ? `${appState.currentUser.nama} (Langsung)` : '-'
              };
              const { data: insOrd } = await supabase.from('order_jasa').insert([ordPayload]).select().single();
              if (insOrd) appState.db.order_jasa.unshift(insOrd);
            }
          }
        } else {
          // Preview Mode Local State
          trxPayload.id = 'trx-' + Date.now();
          appState.db.transaksi.unshift(trxPayload);
          itemsSnapshot.forEach((item, idx) => {
            if (item.kategori === 'ATK') {
              const prod = appState.db.produk_jasa.find(p => p.id === item.id);
              if (prod) prod.stok = Math.max(0, Number(prod.stok) - item.qty);
            } else if (item.kategori === 'Jasa') {
              appState.db.order_jasa.unshift({
                id: `ord-${Date.now()}-${idx}`,
                no_invoice: invNo,
                tanggal_masuk: todayStr,
                nama_pelanggan: custName,
                no_hp: custPhone,
                jenis_jasa: item.nama_item,
                catatan_desain: item.catatan || (jasaStatusAwal === 'Selesai' ? 'Cetak Cepat / Langsung Selesai' : 'Sesuai standar cetak'),
                qty: item.qty,
                jadwal_pengerjaan: jadwalSelesai,
                status_order: jasaStatusAwal,
                diinput_oleh: appState.currentUser.nama,
                divalidasi_oleh: jasaStatusAwal === 'Selesai' ? `${appState.currentUser.nama} (Langsung)` : '-'
              });
            }
          });
        }

        appState.cart = [];
        updateHeaderNotifications();
        showToast('Transaksi berhasil disimpan!', 'success');
        renderPOS(document.getElementById('appContent'));
        openReceiptModal(invNo);
      } catch (err) {
        showToast('Gagal memproses transaksi: ' + err.message, 'error');
      }
    };

    // ==================== 11. DIGITAL RECEIPT (THERMAL, PDF, WORD & WHATSAPP) ====================
    window.openReceiptModal = function(invNo) {
      const trx = appState.db.transaksi.find(t => t.no_invoice === invNo);
      if (!trx) return;
      const shop = getShopProfile();
      const items = Array.isArray(trx.detail_item) ? trx.detail_item : [];

      const itemsHtml = items.map(i => `
        <div class="py-1.5 border-b border-dashed border-slate-300">
          <div class="font-bold">${i.nama_item}</div>
          ${i.catatan ? `<div class="text-[10px] italic text-slate-600">Ket: ${i.catatan}</div>` : ''}
          <div class="flex justify-between mt-0.5">
            <span>${i.qty} ${i.satuan} x ${Number(i.harga_jual).toLocaleString('id-ID')}</span>
            <span class="font-bold">${Number(i.qty * i.harga_jual).toLocaleString('id-ID')}</span>
          </div>
        </div>
      `).join('');

      document.getElementById('receiptPrintArea').innerHTML = `
        <div class="text-center border-b-2 border-dashed border-slate-400 pb-3 mb-3">
          ${shop.logo_url ? `<img src="${shop.logo_url}" alt="Logo" class="w-12 h-12 mx-auto mb-1.5 object-contain rounded-lg" />` : ''}
          <div class="font-extrabold text-base tracking-wider uppercase">${shop.nama_toko}</div>
          <div class="text-[10px] font-semibold">${shop.tagline}</div>
          <div class="text-[10px] text-slate-600 mt-0.5">${shop.alamat}</div>
          <div class="text-[10px] text-slate-600">Telp/WA: ${shop.telepon}</div>
        </div>

        <div class="text-[11px] space-y-0.5 border-b border-dashed border-slate-400 pb-2.5 mb-2.5">
          <div class="flex justify-between"><span>No. Nota:</span><span class="font-bold">${trx.no_invoice}</span></div>
          <div class="flex justify-between"><span>Tanggal :</span><span>${trx.tanggal}</span></div>
          <div class="flex justify-between"><span>Kasir   :</span><span>${trx.kasir}</span></div>
          <div class="flex justify-between"><span>Plg     :</span><span class="font-bold">${trx.nama_pelanggan}</span></div>
        </div>

        <div class="mb-3">${itemsHtml}</div>

        <div class="space-y-1 text-xs border-t border-slate-800 pt-2">
          <div class="flex justify-between font-extrabold text-sm">
            <span>TOTAL</span>
            <span>${formatRupiah(trx.total_tagihan)}</span>
          </div>
          <div class="flex justify-between">
            <span>Bayar (${trx.metode_bayar})</span>
            <span class="font-bold">${formatRupiah(trx.jumlah_bayar)}</span>
          </div>
          <div class="flex justify-between font-bold ${Number(trx.sisa_tagihan) > 0 ? 'text-rose-700' : 'text-emerald-700'}">
            <span>Status (${trx.status_bayar})</span>
            <span>${Number(trx.sisa_tagihan) > 0 ? 'Sisa: ' + formatRupiah(trx.sisa_tagihan) : 'LUNAS'}</span>
          </div>
        </div>

        <div class="text-center text-[10px] text-slate-500 mt-4 pt-3 border-t border-dashed border-slate-300">
          ${shop.catatan_nota}
        </div>
      `;

      document.getElementById('btnShareWaReceipt').onclick = () => shareReceiptToWhatsApp(trx);
      document.getElementById('btnPrintPdfReceipt').onclick = () => printTargetSection('receipt-pdf', trx);
      document.getElementById('btnDownloadWordReceipt').onclick = () => downloadReceiptWord(trx);

      document.getElementById('receiptModal').classList.remove('hidden');
      lucide.createIcons();
    };

    function buildFormalReceiptDocumentHTML(trx, isWordExport = false) {
      const shop = getShopProfile();
      const items = Array.isArray(trx.detail_item) ? trx.detail_item : [];
      const itemRows = items.map((i, idx) => `
        <tr>
          <td style="border: 1px solid #cbd5e1; padding: 8px; text-align: center;">${idx + 1}</td>
          <td style="border: 1px solid #cbd5e1; padding: 8px;">
            <strong>${i.nama_item}</strong> (${i.kategori})
            ${i.catatan ? `<div style="font-size: 9pt; color: #475569; font-style: italic;">Ket: ${i.catatan}</div>` : ''}
          </td>
          <td style="border: 1px solid #cbd5e1; padding: 8px; text-align: center;">${i.qty} ${i.satuan}</td>
          <td style="border: 1px solid #cbd5e1; padding: 8px; text-align: right;">${formatRupiah(i.harga_jual)}</td>
          <td style="border: 1px solid #cbd5e1; padding: 8px; text-align: right; font-weight: bold;">${formatRupiah(i.qty * i.harga_jual)}</td>
        </tr>
      `).join('');

      return `
        <div style="font-family: 'Plus Jakarta Sans', Arial, sans-serif; color: #0f172a; max-width: 780px; margin: 0 auto; padding: ${isWordExport ? '0' : '12px'};">
          <table style="width: 100%; border-collapse: collapse; border-bottom: 3px double #0B192C; margin-bottom: 16px;">
            <tr>
              ${shop.logo_url ? `<td style="width: 85px; padding-bottom: 12px; border: none;"><img src="${shop.logo_url}" width="72" height="72" style="object-fit: contain;" /></td>` : ''}
              <td style="padding-bottom: 12px; border: none;">
                <div style="font-size: 18pt; font-weight: 800; text-transform: uppercase; color: #0B192C;">${shop.nama_toko}</div>
                <div style="font-size: 10pt; font-weight: 700; color: #b45309;">${shop.tagline}</div>
                <div style="font-size: 9pt; color: #475569;">${shop.alamat} | Telp/WA: ${shop.telepon}</div>
              </td>
              <td style="width: 210px; text-align: right; padding-bottom: 12px; border: none;">
                <div style="display: inline-block; background: #0B192C; color: #FBBF24; padding: 5px 12px; font-weight: 800; font-size: 10pt; border-radius: 4px;">NOTA TRANSAKSI</div>
                <div style="font-size: 10pt; font-weight: 800; margin-top: 6px;">${trx.no_invoice}</div>
                <div style="font-size: 9pt; color: #475569;">Tanggal: ${trx.tanggal}</div>
              </td>
            </tr>
          </table>

          <table style="width: 100%; border-collapse: collapse; margin-bottom: 14px; background: #f8fafc; border: 1px solid #e2e8f0;">
            <tr>
              <td style="padding: 10px; width: 55%; border: none;">
                <div style="font-size: 8.5pt; color: #64748b; font-weight: 700;">PELANGGAN:</div>
                <div style="font-size: 11pt; font-weight: 800;">${trx.nama_pelanggan}</div>
                ${trx.no_hp ? `<div style="font-size: 9pt;">No. HP/WA: ${trx.no_hp}</div>` : ''}
              </td>
              <td style="padding: 10px; width: 45%; text-align: right; border: none;">
                <div style="font-size: 9pt;">Kasir: <strong>${trx.kasir}</strong></div>
                <div style="font-size: 9pt;">Metode: <strong>${trx.metode_bayar}</strong></div>
              </td>
            </tr>
          </table>

          <table style="width: 100%; border-collapse: collapse; margin-bottom: 16px; font-size: 10pt;">
            <thead>
              <tr style="background: #0B192C; color: #ffffff;">
                <th style="border: 1px solid #0B192C; padding: 8px; width: 36px; text-align: center;">No</th>
                <th style="border: 1px solid #0B192C; padding: 8px; text-align: left;">Deskripsi Barang ATK / Jasa</th>
                <th style="border: 1px solid #0B192C; padding: 8px; width: 85px; text-align: center;">Qty</th>
                <th style="border: 1px solid #0B192C; padding: 8px; width: 120px; text-align: right;">Harga</th>
                <th style="border: 1px solid #0B192C; padding: 8px; width: 130px; text-align: right;">Subtotal</th>
              </tr>
            </thead>
            <tbody>${itemRows}</tbody>
          </table>

          <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
            <tr>
              <td style="width: 52%; vertical-align: top; padding-right: 16px; border: none;">
                <div style="padding: 10px; border: 1px dashed #94a3b8; font-size: 9pt; color: #475569;">
                  <strong>Catatan:</strong><br/>${shop.catatan_nota}
                </div>
              </td>
              <td style="width: 48%; vertical-align: top; border: none;">
                <table style="width: 100%; border-collapse: collapse; font-size: 10pt;">
                  <tr>
                    <td style="border: 1px solid #cbd5e1; padding: 7px 10px; font-weight: 700;">Total Tagihan</td>
                    <td style="border: 1px solid #cbd5e1; padding: 7px 10px; text-align: right; font-weight: 800;">${formatRupiah(trx.total_tagihan)}</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbd5e1; padding: 7px 10px;">Dibayar (${trx.metode_bayar})</td>
                    <td style="border: 1px solid #cbd5e1; padding: 7px 10px; text-align: right; font-weight: 700;">${formatRupiah(trx.jumlah_bayar)}</td>
                  </tr>
                  <tr>
                    <td style="border: 1px solid #cbd5e1; padding: 7px 10px; font-weight: 700;">Status</td>
                    <td style="border: 1px solid #cbd5e1; padding: 7px 10px; text-align: right; font-weight: 800;">
                      ${Number(trx.sisa_tagihan) > 0 ? `DP (Sisa: ${formatRupiah(trx.sisa_tagihan)})` : 'LUNAS'}
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>

          <table style="width: 100%; border-collapse: collapse; margin-top: 24px; text-align: center; font-size: 9.5pt;">
            <tr>
              <td style="width: 50%; border: none;">Penerima / Pelanggan,<br/><br/><br/><u><strong>${trx.nama_pelanggan}</strong></u></td>
              <td style="width: 50%; border: none;">Hormat Kami, ${shop.nama_toko}<br/><br/><br/><u><strong>${trx.kasir}</strong></u></td>
            </tr>
          </table>
        </div>
      `;
    }

    function downloadReceiptWord(trx) {
      const shop = getShopProfile();
      const html = buildFormalReceiptDocumentHTML(trx, true);
      const doc = `<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'></head><body>${html}</body></html>`;
      const blob = new Blob(['\ufeff', doc], { type: 'application/msword' });
      const a = document.createElement('a');
      a.href = URL.createObjectURL(blob);
      a.download = `Nota_${trx.no_invoice}_${shop.nama_toko.replace(/\s+/g, '_')}.doc`;
      a.click();
      showToast('Nota Word (.doc) berhasil diunduh!', 'success');
    }

    function shareReceiptToWhatsApp(trx) {
      const shop = getShopProfile();
      const items = Array.isArray(trx.detail_item) ? trx.detail_item : [];
      const lines = items.map(i => `• ${i.nama_item} (${i.qty} ${i.satuan}) = ${formatRupiah(i.qty * i.harga_jual)}${i.catatan ? `\n  _Ket: ${i.catatan}_` : ''}`).join('\n');

      const text = `*NOTA TRANSAKSI - ${shop.nama_toko.toUpperCase()}*\n` +
        `${shop.tagline}\n` +
        `Alamat: ${shop.alamat} | Telp: ${shop.telepon}\n` +
        `--------------------------------\n` +
        `No. Nota : *${trx.no_invoice}*\n` +
        `Tanggal  : ${trx.tanggal}\n` +
        `Pelanggan: ${trx.nama_pelanggan}\n` +
        `--------------------------------\n` +
        `${lines}\n` +
        `--------------------------------\n` +
        `*TOTAL TAGIHAN : ${formatRupiah(trx.total_tagihan)}*\n` +
        `Dibayar (${trx.metode_bayar}) : ${formatRupiah(trx.jumlah_bayar)}\n` +
        `Status : *${trx.status_bayar}* ${Number(trx.sisa_tagihan) > 0 ? `(Sisa: *${formatRupiah(trx.sisa_tagihan)}*)` : ''}\n` +
        `--------------------------------\n` +
        `${shop.catatan_nota}`;

      const phone = trx.no_hp || '';
      window.open(phone ? `https://wa.me/${phone}?text=${encodeURIComponent(text)}` : `https://wa.me/?text=${encodeURIComponent(text)}`, '_blank');
    }

    // ==================== 12. ORDERAN MASUK & JADWAL (FILTER KIRI KE KANAN) ====================
    function renderOrders(container) {
      const isAdmin = appState.currentUser.role === 'Admin';
      const now = new Date(todayStr + 'T00:00:00');
      const threeDaysMs = 3 * 24 * 60 * 60 * 1000;

      const pipeline = [
        { id: 'Menunggu Validasi', label: '1. Menunggu Validasi', count: appState.db.order_jasa.filter(o => o.status_order === 'Menunggu Validasi').length },
        { id: 'Diproses', label: '2. Diproses', count: appState.db.order_jasa.filter(o => o.status_order === 'Diproses').length },
        { id: 'Selesai', label: '3. Selesai', count: appState.db.order_jasa.filter(o => o.status_order === 'Selesai').length },
        { id: 'Batal', label: '4. Dibatalkan', count: appState.db.order_jasa.filter(o => o.status_order === 'Batal').length },
        { id: 'Semua', label: 'Semua', count: appState.db.order_jasa.length }
      ];

      const filtered = appState.db.order_jasa.filter(o => {
        const trx = appState.db.transaksi.find(t => t.no_invoice === o.no_invoice);
        const matchSt = appState.orderFilterStatus === 'Semua' || o.status_order === appState.orderFilterStatus;
        const matchPay = appState.orderFilterPay === 'Semua' || (appState.orderFilterPay === 'DP' && trx && Number(trx.sisa_tagihan) > 0);
        const q = appState.orderSearch.toLowerCase();
        const matchQ = o.no_invoice.toLowerCase().includes(q) || o.nama_pelanggan.toLowerCase().includes(q) || o.jenis_jasa.toLowerCase().includes(q);
        return matchSt && matchPay && matchQ;
      });

      const dpTrxs = appState.db.transaksi.filter(t => Number(t.sisa_tagihan) > 0);

      container.innerHTML = `
        <div class="space-y-5 fade-in">
          <!-- Pipeline Filter Tabs Kiri ke Kanan -->
          <div class="glass-card p-4 rounded-2xl space-y-3">
            <div class="flex items-center gap-2 overflow-x-auto pb-1">
              ${pipeline.map((st, idx) => {
                const active = appState.orderFilterStatus === st.id;
                return `
                  <button onclick="appState.orderFilterStatus='${st.id}'; renderOrders(document.getElementById('appContent'))"
                    class="px-4 py-2.5 rounded-lg text-xs font-extrabold shrink-0 transition flex items-center gap-2 border ${
                      active ? 'theme-bg-primary text-white border-amber-400 shadow' : 'bg-slate-50 text-slate-700 border-slate-200 hover:bg-slate-100'
                    }">
                    <span>${st.label}</span>
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-extrabold ${active ? 'theme-btn-accent' : 'bg-slate-200 text-slate-700'}">${st.count}</span>
                  </button>
                  ${idx < 2 ? `<i data-lucide="chevron-right" class="w-4 h-4 text-slate-400 shrink-0"></i>` : ''}
                `;
              }).join('')}
            </div>

            <div class="flex flex-col sm:flex-row gap-3 pt-2 border-t border-slate-100">
              <input type="text" value="${appState.orderSearch}" oninput="appState.orderSearch=this.value; renderOrders(document.getElementById('appContent'))"
                placeholder="Cari No. Invoice, nama pelanggan, atau jasa..."
                class="flex-1 px-4 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-medium" />
              <select onchange="appState.orderFilterPay=this.value; renderOrders(document.getElementById('appContent'))"
                class="px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold">
                <option value="Semua" ${appState.orderFilterPay === 'Semua' ? 'selected' : ''}>Semua Pembayaran</option>
                <option value="DP" ${appState.orderFilterPay === 'DP' ? 'selected' : ''}>⏳ Belum Lunas (DP)</option>
              </select>
            </div>
          </div>

          <!-- Order Cards -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            ${filtered.length === 0 ? `
              <div class="col-span-2 bg-white p-12 rounded-xl border border-slate-200 text-center text-slate-400 text-xs">
                Belum ada daftar orderan pada status "${appState.orderFilterStatus}".
              </div>
            ` : filtered.map(o => {
              const trx = appState.db.transaksi.find(t => t.no_invoice === o.no_invoice);
              const hasDebt = trx && Number(trx.sisa_tagihan) > 0;
              const targetDate = new Date(o.jadwal_pengerjaan + 'T23:59:59');
              const diffMs = targetDate - now;
              const isActive = o.status_order === 'Menunggu Validasi' || o.status_order === 'Diproses';
              const isUrgent = isActive && diffMs <= threeDaysMs;
              const isLate = isActive && diffMs < 0;

              return `
                <div class="bg-white rounded-xl border ${isUrgent ? (isLate ? 'border-rose-400' : 'border-amber-400') : 'border-slate-200'} p-5 shadow-xs flex flex-col justify-between space-y-3">
                  <div>
                    <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                      <span class="font-extrabold text-xs px-2.5 py-1 rounded theme-bg-primary text-amber-400">${o.no_invoice}</span>
                      <div class="flex items-center gap-1.5">
                        ${isUrgent ? `<span class="px-2 py-0.5 rounded text-[10px] font-extrabold ${isLate ? 'bg-rose-600 text-white' : 'theme-btn-accent'}">${isLate ? 'Lewat Deadline' : 'Deadline < 3 Hari'}</span>` : ''}
                        <span class="px-2.5 py-0.5 rounded text-[10px] font-extrabold bg-slate-100 text-slate-800 border border-slate-200">${o.status_order}</span>
                      </div>
                    </div>

                    <h4 class="font-extrabold text-sm text-slate-900">${o.jenis_jasa} (${o.qty})</h4>
                    <p class="text-xs font-bold text-slate-700 mt-0.5">${o.nama_pelanggan}</p>
                    <p class="text-xs text-slate-600 mt-1.5 p-2.5 rounded-lg bg-slate-50 border border-slate-100"><strong>Ket:</strong> ${o.catatan_desain || '-'}</p>

                    <div class="mt-3 grid grid-cols-2 gap-2 text-[11px]">
                      <div class="p-2 rounded-lg bg-slate-50 border border-slate-200">
                        <span class="text-slate-400 block">Jadwal Pengerjaan:</span>
                        <span class="font-extrabold text-slate-900">${o.jadwal_pengerjaan}</span>
                      </div>
                      <div class="p-2 rounded-lg ${hasDebt ? 'bg-amber-50 border border-amber-200' : 'bg-emerald-50 border border-emerald-200'}">
                        <span class="text-slate-500 block">Pembayaran:</span>
                        <span class="font-extrabold ${hasDebt ? 'text-amber-800' : 'text-emerald-700'}">
                          ${hasDebt ? `DP (Sisa ${formatRupiah(trx.sisa_tagihan)})` : 'LUNAS'}
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between gap-2">
                    <span class="text-[10px] text-slate-400">Input: ${o.diinput_oleh}</span>
                    <div class="flex items-center gap-1.5">
                      <button onclick="openReceiptModal('${o.no_invoice}')" class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-slate-200 text-slate-800 font-bold text-xs">Nota</button>
                      ${hasDebt ? `<button onclick="openPelunasanModal('${o.no_invoice}')" class="px-3 py-1.5 rounded-lg bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs">Lunasi DP</button>` : ''}
                      ${isAdmin ? `<button onclick="openOrderValidationModal('${o.id}')" class="px-3 py-1.5 rounded-lg theme-btn-accent font-extrabold text-xs">Validasi / Jadwal</button>` : ''}
                    </div>
                  </div>
                </div>
              `;
            }).join('')}
          </div>

          ${dpTrxs.length > 0 ? `
            <div class="bg-amber-50 rounded-xl border border-amber-200 p-4">
              <h4 class="font-extrabold text-xs uppercase text-slate-900 mb-2">Transaksi Belum Lunas / DP (${dpTrxs.length})</h4>
              <div class="overflow-x-auto">
                <table class="w-full text-left text-xs">
                  <thead>
                    <tr class="border-b border-amber-200 text-slate-700">
                      <th class="py-2 pr-3">Invoice</th>
                      <th class="py-2 pr-3">Pelanggan</th>
                      <th class="py-2 pr-3">Sisa Tagihan</th>
                      <th class="py-2 text-right">Aksi</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-amber-200/60">
                    ${dpTrxs.map(t => `
                      <tr>
                        <td class="py-2 pr-3 font-bold">${t.no_invoice}</td>
                        <td class="py-2 pr-3">${t.nama_pelanggan}</td>
                        <td class="py-2 pr-3 font-extrabold text-rose-700">${formatRupiah(t.sisa_tagihan)}</td>
                        <td class="py-2 text-right">
                          <button onclick="openPelunasanModal('${t.no_invoice}')" class="px-3 py-1 rounded bg-emerald-600 text-white font-bold text-[11px]">Lunasi</button>
                        </td>
                      </tr>
                    `).join('')}
                  </tbody>
                </table>
              </div>
            </div>
          ` : ''}
        </div>
      `;
      lucide.createIcons();
    }

    window.openOrderValidationModal = function(orderId) {
      const o = appState.db.order_jasa.find(x => x.id === orderId);
      if (!o) return;
      document.getElementById('valOrderId').value = o.id;
      document.getElementById('valOrderInfoId').textContent = o.no_invoice;
      document.getElementById('valOrderInfoCust').textContent = o.nama_pelanggan;
      document.getElementById('valOrderInfoItem').textContent = `${o.jenis_jasa} (${o.qty})`;
      document.getElementById('valOrderStatus').value = o.status_order;
      document.getElementById('valOrderSchedule').value = o.jadwal_pengerjaan;
      document.getElementById('valOrderNote').value = o.catatan_desain || '';
      document.getElementById('orderValidationModal').classList.remove('hidden');
      lucide.createIcons();
    };

    window.submitOrderValidation = async function(e) {
      e.preventDefault();
      const id = document.getElementById('valOrderId').value;
      const status = document.getElementById('valOrderStatus').value;
      const schedule = document.getElementById('valOrderSchedule').value;
      const note = document.getElementById('valOrderNote').value;

      try {
        if (!IS_PREVIEW && supabase) {
          const { error } = await supabase.from('order_jasa').update({
            status_order: status,
            jadwal_pengerjaan: schedule,
            catatan_desain: note,
            divalidasi_oleh: appState.currentUser.nama
          }).eq('id', id);
          if (error) throw error;
        }
        const o = appState.db.order_jasa.find(x => x.id === id);
        if (o) {
          o.status_order = status;
          o.jadwal_pengerjaan = schedule;
          o.catatan_desain = note;
          o.divalidasi_oleh = appState.currentUser.nama;
        }
        updateHeaderNotifications();
        closeModal('orderValidationModal');
        showToast(`Status order diperbarui (${status})`, 'success');
        navigateTo(appState.activeTab);
      } catch (err) {
        showToast('Gagal update order: ' + err.message, 'error');
      }
    };

    window.openPelunasanModal = function(invNo) {
      const t = appState.db.transaksi.find(x => x.no_invoice === invNo);
      if (!t) return;
      document.getElementById('lunasInvoiceNo').value = t.no_invoice;
      document.getElementById('lunasInfoInv').textContent = t.no_invoice;
      document.getElementById('lunasInfoCust').textContent = t.nama_pelanggan;
      document.getElementById('lunasInfoTotal').textContent = formatRupiah(t.total_tagihan);
      document.getElementById('lunasInfoPaid').textContent = formatRupiah(t.jumlah_bayar);
      document.getElementById('lunasInfoSisa').textContent = formatRupiah(t.sisa_tagihan);
      document.getElementById('pelunasanModal').classList.remove('hidden');
      lucide.createIcons();
    };

    window.submitPelunasan = async function(e) {
      e.preventDefault();
      const invNo = document.getElementById('lunasInvoiceNo').value;
      const metode = document.getElementById('lunasMetode').value;
      const t = appState.db.transaksi.find(x => x.no_invoice === invNo);
      if (!t) return;

      const updatedMetode = `${t.metode_bayar} + ${metode}`;
      try {
        if (!IS_PREVIEW && supabase) {
          const { error } = await supabase.from('transaksi').update({
            jumlah_bayar: t.total_tagihan,
            sisa_tagihan: 0,
            status_bayar: 'Lunas',
            metode_bayar: updatedMetode
          }).eq('no_invoice', invNo);
          if (error) throw error;
        }
        t.jumlah_bayar = t.total_tagihan;
        t.sisa_tagihan = 0;
        t.status_bayar = 'Lunas';
        t.metode_bayar = updatedMetode;

        closeModal('pelunasanModal');
        showToast(`Invoice ${invNo} telah LUNAS!`, 'success');
        navigateTo(appState.activeTab);
        openReceiptModal(invNo);
      } catch (err) {
        showToast('Gagal memproses pelunasan: ' + err.message, 'error');
      }
    };

    // ==================== 13. KATALOG ATK & JASA (ADMIN UTAMA) ====================
    function renderKatalog(container) {
      const items = appState.db.produk_jasa.filter(i => {
        const matchCat = appState.katalogFilterCat === 'Semua' || i.kategori === appState.katalogFilterCat;
        const matchQ = i.nama_item.toLowerCase().includes(appState.katalogSearch.toLowerCase());
        return matchCat && matchQ;
      });

      container.innerHTML = `
        <div class="space-y-4 fade-in">
          <div class="glass-card p-4 rounded-xl flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div class="flex flex-1 gap-2">
              <input type="text" value="${appState.katalogSearch}" oninput="appState.katalogSearch=this.value; renderKatalog(document.getElementById('appContent'))"
                placeholder="Cari item ATK atau jasa percetakan..." class="flex-1 px-3.5 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-medium" />
              <select onchange="appState.katalogFilterCat=this.value; renderKatalog(document.getElementById('appContent'))"
                class="px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold">
                <option value="Semua" ${appState.katalogFilterCat === 'Semua' ? 'selected' : ''}>Semua</option>
                <option value="ATK" ${appState.katalogFilterCat === 'ATK' ? 'selected' : ''}>ATK</option>
                <option value="Jasa" ${appState.katalogFilterCat === 'Jasa' ? 'selected' : ''}>Jasa</option>
              </select>
            </div>
            <button onclick="openProductModal()" class="px-4 py-2.5 theme-btn-accent font-extrabold text-xs rounded-lg shadow flex items-center justify-center gap-1.5">
              <i data-lucide="plus" class="w-4 h-4"></i>
              <span>TAMBAH ATK / JASA</span>
            </button>
          </div>

          <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="overflow-x-auto">
              <table class="w-full text-left text-xs">
                <thead class="theme-bg-primary text-white uppercase">
                  <tr>
                    <th class="p-3.5">Kategori</th>
                    <th class="p-3.5">Nama Item / Jasa</th>
                    <th class="p-3.5">Harga Modal</th>
                    <th class="p-3.5">Harga Jual</th>
                    <th class="p-3.5">Stok</th>
                    <th class="p-3.5 text-right">Aksi</th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                  ${items.length === 0 ? `
                    <tr><td colspan="6" class="p-8 text-center text-slate-400">Belum ada data katalog ATK atau Jasa.</td></tr>
                  ` : items.map(i => {
                    const isLow = i.kategori === 'ATK' && Number(i.stok) <= Number(i.min_stok);
                    return `
                      <tr class="hover:bg-slate-50">
                        <td class="p-3.5"><span class="px-2 py-0.5 rounded font-extrabold text-[10px] ${i.kategori === 'ATK' ? 'bg-sky-100 text-sky-900' : 'bg-amber-100 text-amber-900'}">${i.kategori}</span></td>
                        <td class="p-3.5 font-bold text-slate-900">${i.nama_item} <span class="text-slate-400 font-normal">(${i.satuan})</span></td>
                        <td class="p-3.5 text-slate-600">${formatRupiah(i.harga_modal)}</td>
                        <td class="p-3.5 font-extrabold text-slate-900">${formatRupiah(i.harga_jual)}</td>
                        <td class="p-3.5">${i.kategori === 'ATK' ? `<span class="px-2 py-0.5 rounded font-extrabold ${isLow ? 'bg-rose-100 text-rose-700' : 'bg-emerald-50 text-emerald-700'}">${i.stok} ${i.satuan}</span>` : `<span class="text-slate-400">Unlimited</span>`}</td>
                        <td class="p-3.5 text-right space-x-1">
                          <button onclick="openProductModal('${i.id}')" class="p-1.5 rounded bg-slate-100 hover:bg-slate-200 text-slate-800"><i data-lucide="pencil" class="w-3.5 h-3.5"></i></button>
                          <button onclick="deleteProduct('${i.id}')" class="p-1.5 rounded bg-rose-50 hover:bg-rose-100 text-rose-600"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
                        </td>
                      </tr>
                    `;
                  }).join('')}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      `;
      lucide.createIcons();
    }

    window.openProductModal = function(id = '') {
      const isEdit = Boolean(id);
      document.getElementById('productModalTitle').textContent = isEdit ? 'Edit Data ATK / Jasa' : 'Tambah ATK / Jasa Baru';
      if (isEdit) {
        const i = appState.db.produk_jasa.find(x => x.id === id);
        document.getElementById('prodId').value = i.id;
        document.getElementById('prodKategori').value = i.kategori;
        document.getElementById('prodSatuan').value = i.satuan;
        document.getElementById('prodNama').value = i.nama_item;
        document.getElementById('prodModal').value = i.harga_modal;
        document.getElementById('prodJual').value = i.harga_jual;
        document.getElementById('prodStok').value = i.stok;
        document.getElementById('prodMinStok').value = i.min_stok;
      } else {
        document.getElementById('prodId').value = '';
        document.getElementById('prodKategori').value = 'ATK';
        document.getElementById('prodSatuan').value = 'Pcs';
        document.getElementById('prodNama').value = '';
        document.getElementById('prodModal').value = '';
        document.getElementById('prodJual').value = '';
        document.getElementById('prodStok').value = 10;
        document.getElementById('prodMinStok').value = 5;
      }
      toggleStokField();
      document.getElementById('productModal').classList.remove('hidden');
      lucide.createIcons();
    };

    window.toggleStokField = function() {
      const kat = document.getElementById('prodKategori').value;
      const wrap = document.getElementById('prodStokWrapper');
      if (kat === 'Jasa') wrap.classList.add('hidden');
      else wrap.classList.remove('hidden');
    };

    window.submitProductForm = async function(e) {
      e.preventDefault();
      const id = document.getElementById('prodId').value;
      const kat = document.getElementById('prodKategori').value;
      const payload = {
        kategori: kat,
        nama_item: document.getElementById('prodNama').value.trim(),
        satuan: document.getElementById('prodSatuan').value,
        harga_modal: Number(document.getElementById('prodModal').value),
        harga_jual: Number(document.getElementById('prodJual').value),
        stok: kat === 'ATK' ? Number(document.getElementById('prodStok').value) : 9999,
        min_stok: kat === 'ATK' ? Number(document.getElementById('prodMinStok').value) : 0
      };

      try {
        if (!IS_PREVIEW && supabase) {
          if (id) {
            const { data, error } = await supabase.from('produk_jasa').update(payload).eq('id', id).select().single();
            if (error) throw error;
            const idx = appState.db.produk_jasa.findIndex(x => x.id === id);
            if (idx > -1) appState.db.produk_jasa[idx] = data;
          } else {
            const { data, error } = await supabase.from('produk_jasa').insert([payload]).select().single();
            if (error) throw error;
            appState.db.produk_jasa.unshift(data);
          }
        } else {
          if (id) {
            const idx = appState.db.produk_jasa.findIndex(x => x.id === id);
            if (idx > -1) appState.db.produk_jasa[idx] = { id, ...payload };
          } else {
            appState.db.produk_jasa.unshift({ id: 'item-' + Date.now(), ...payload });
          }
        }
        updateHeaderNotifications();
        closeModal('productModal');
        showToast('Data katalog berhasil disimpan!', 'success');
        renderKatalog(document.getElementById('appContent'));
      } catch (err) {
        showToast('Gagal menyimpan katalog: ' + err.message, 'error');
      }
    };

    window.deleteProduct = function(id) {
      showConfirmDialog('Hapus Item Katalog', 'Hapus item ini dari daftar ATK / Jasa?', async () => {
        try {
          if (!IS_PREVIEW && supabase) {
            const { error } = await supabase.from('produk_jasa').delete().eq('id', id);
            if (error) throw error;
          }
          appState.db.produk_jasa = appState.db.produk_jasa.filter(x => x.id !== id);
          updateHeaderNotifications();
          showToast('Item dihapus.', 'info');
          renderKatalog(document.getElementById('appContent'));
        } catch (err) {
          showToast('Gagal menghapus: ' + err.message, 'error');
        }
      });
    };

    // ==================== 14. PEMBELIAN STOK ATK (ADMIN UTAMA) ====================
    function renderPembelianATK(container) {
      const atkItems = appState.db.produk_jasa.filter(p => p.kategori === 'ATK');

      container.innerHTML = `
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 fade-in">
          <div class="lg:col-span-5">
            <div class="glass-card p-6 rounded-2xl">
              <h3 class="font-printx font-extrabold text-sm uppercase text-slate-900 mb-1">Input Pembelian / Restock ATK</h3>
              <p class="text-xs text-slate-500 mb-4">Menambah stok ATK otomatis & mencatat pengeluaran pembelian.</p>

              <form onsubmit="submitPembelianATK(event)" class="space-y-3">
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">Pilih Barang ATK *</label>
                  <select id="beliItemId" required onchange="prefillHargaBeli()" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold">
                    ${atkItems.length === 0 ? `<option value="">-- Tambah barang ATK di Katalog terlebih dahulu --</option>` :
                      atkItems.map(i => `<option value="${i.id}" data-modal="${i.harga_modal}">${i.nama_item} (Sisa: ${i.stok} ${i.satuan})</option>`).join('')
                    }
                  </select>
                </div>
                <div class="grid grid-cols-2 gap-3">
                  <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Nama Supplier *</label>
                    <input type="text" id="beliSupplier" required placeholder="CV. Sumber Makmur" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs" />
                  </div>
                  <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Tanggal Beli *</label>
                    <input type="date" id="beliTanggal" required value="${todayStr}" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
                  </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                  <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Qty Beli *</label>
                    <input type="number" id="beliQty" required min="1" value="10" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
                  </div>
                  <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Harga Beli Satuan (Rp) *</label>
                    <input type="number" id="beliHarga" required min="0" value="${atkItems[0]?.harga_modal || 0}" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
                  </div>
                </div>
                <button type="submit" ${atkItems.length === 0 ? 'disabled' : ''} class="w-full py-3 theme-btn-accent font-printx font-extrabold text-xs uppercase rounded-lg shadow">
                  SIMPAN PEMBELIAN & TAMBAH STOK
                </button>
              </form>
            </div>
          </div>

          <div class="lg:col-span-7">
            <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs">
              <h3 class="font-printx font-extrabold text-sm uppercase text-slate-900 mb-4">Riwayat Pembelian Stok ATK</h3>
              <div class="space-y-2.5 max-h-[450px] overflow-y-auto">
                ${appState.db.pembelian_atk.length === 0 ? `
                  <p class="text-xs text-slate-400 text-center py-8">Belum ada riwayat pembelian stok ATK.</p>
                ` : appState.db.pembelian_atk.map(b => `
                  <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between text-xs">
                    <div>
                      <p class="font-bold text-slate-900">${b.nama_item} <span class="text-emerald-700 font-extrabold">(+${b.qty_beli})</span></p>
                      <p class="text-[11px] text-slate-500">${b.tanggal} • Supplier: ${b.supplier}</p>
                    </div>
                    <span class="font-extrabold text-rose-600">${formatRupiah(b.total_pengeluaran)}</span>
                  </div>
                `).join('')}
              </div>
            </div>
          </div>
        </div>
      `;
      lucide.createIcons();
    }

    window.prefillHargaBeli = function() {
      const sel = document.getElementById('beliItemId');
      const opt = sel.options[sel.selectedIndex];
      document.getElementById('beliHarga').value = opt?.getAttribute('data-modal') || 0;
    };

    window.submitPembelianATK = async function(e) {
      e.preventDefault();
      const prodId = document.getElementById('beliItemId').value;
      const item = appState.db.produk_jasa.find(p => p.id === prodId);
      if (!item) return;

      const qty = Number(document.getElementById('beliQty').value);
      const harga = Number(document.getElementById('beliHarga').value);
      const payload = {
        tanggal: document.getElementById('beliTanggal').value,
        supplier: document.getElementById('beliSupplier').value.trim(),
        produk_id: item.id,
        nama_item: item.nama_item,
        qty_beli: qty,
        harga_beli_satuan: harga,
        total_pengeluaran: qty * harga,
        admin_nama: appState.currentUser.nama
      };

      try {
        const nextStok = Number(item.stok) + qty;
        if (!IS_PREVIEW && supabase) {
          const { data: insBeli, error: bErr } = await supabase.from('pembelian_atk').insert([payload]).select().single();
          if (bErr) throw bErr;
          await supabase.from('produk_jasa').update({ stok: nextStok, harga_modal: harga }).eq('id', item.id);
          appState.db.pembelian_atk.unshift(insBeli);
        } else {
          appState.db.pembelian_atk.unshift({ id: 'bli-' + Date.now(), ...payload });
        }
        item.stok = nextStok;
        item.harga_modal = harga;
        updateHeaderNotifications();
        showToast(`Stok ${item.nama_item} bertambah +${qty} ${item.satuan}!`, 'success');
        renderPembelianATK(document.getElementById('appContent'));
      } catch (err) {
        showToast('Gagal menyimpan pembelian: ' + err.message, 'error');
      }
    };

    // ==================== 15. KARYAWAN & PENGGAJIAN (EDIT, HAPUS & SLIP GAJI) ====================
    function renderKaryawanAndGaji(container) {
      const activeEmp = appState.db.karyawan.filter(k => k.status === 'Aktif');

      container.innerHTML = `
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 fade-in">
          <!-- LEFT: DATA USER KARYAWAN -->
          <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-xs space-y-4">
            <div class="flex items-center justify-between">
              <div>
                <h3 class="font-printx font-extrabold text-sm uppercase text-slate-900">Data User Karyawan</h3>
                <p class="text-xs text-slate-500">Akun login kasir/operator & pengaturan gaji pokok</p>
              </div>
              <button onclick="openEmployeeModal()" class="px-3.5 py-2 theme-btn-accent font-extrabold text-xs rounded-lg flex items-center gap-1.5 shadow-xs">
                <i data-lucide="user-plus" class="w-3.5 h-3.5"></i>
                <span>TAMBAH USER</span>
              </button>
            </div>

            <div class="space-y-2.5 max-h-[450px] overflow-y-auto">
              ${appState.db.karyawan.length === 0 ? `
                <p class="text-xs text-slate-400 text-center py-8">Belum ada data user karyawan.</p>
              ` : appState.db.karyawan.map(u => `
                <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex items-center justify-between gap-2 text-xs">
                  <div>
                    <div class="flex items-center gap-2">
                      <span class="font-extrabold text-slate-900">${u.nama_lengkap}</span>
                      <span class="px-2 py-0.5 rounded text-[10px] font-bold ${u.status === 'Aktif' ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-700'}">${u.status}</span>
                    </div>
                    <p class="text-[11px] text-slate-500 mt-0.5">User: <strong>${u.username}</strong> • ${u.jabatan} • Gaji: <strong>${formatRupiah(u.gaji_pokok)}</strong></p>
                  </div>
                  <div class="flex gap-1">
                    <button onclick="openEmployeeModal('${u.id}')" class="p-2 rounded bg-white border border-slate-200 text-slate-700 hover:bg-slate-100"><i data-lucide="pencil" class="w-3.5 h-3.5"></i></button>
                    <button onclick="deleteEmployee('${u.id}')" class="p-2 rounded bg-white border border-slate-200 text-rose-600 hover:bg-rose-50"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
                  </div>
                </div>
              `).join('')}
            </div>
          </div>

          <!-- RIGHT: INPUT GAJI & RIWAYAT SLIP GAJI (EDIT, HAPUS, CETAK SLIP) -->
          <div class="space-y-4">
            <div class="glass-card p-6 rounded-2xl">
              <h3 class="font-printx font-extrabold text-sm uppercase text-slate-900 mb-3">Input Pembayaran Gaji Karyawan</h3>
              <form onsubmit="submitPenggajian(event)" class="space-y-3">
                <div class="grid grid-cols-2 gap-3">
                  <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Pilih Karyawan *</label>
                    <select id="gajiUserId" required onchange="prefillGajiPokok()" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold">
                      ${activeEmp.length === 0 ? `<option value="">-- Tambah karyawan terlebih dahulu --</option>` :
                        activeEmp.map(u => `<option value="${u.id}" data-gaji="${u.gaji_pokok}">${u.nama_lengkap}</option>`).join('')
                      }
                    </select>
                  </div>
                  <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Periode Bulan *</label>
                    <input type="month" id="gajiPeriode" required value="${todayStr.slice(0, 7)}" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
                  </div>
                </div>
                <div class="grid grid-cols-3 gap-2">
                  <div>
                    <label class="block text-[11px] font-bold text-slate-700 mb-1">Gaji Pokok</label>
                    <input type="number" id="gajiPokok" required value="${activeEmp[0]?.gaji_pokok || 0}" class="w-full p-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-700 mb-1">Bonus/Lembur</label>
                    <input type="number" id="gajiBonus" value="0" class="w-full p-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
                  </div>
                  <div>
                    <label class="block text-[11px] font-bold text-slate-700 mb-1">Potongan</label>
                    <input type="number" id="gajiPotongan" value="0" class="w-full p-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
                  </div>
                </div>
                <input type="text" id="gajiCatatan" placeholder="Catatan slip gaji (opsional)..." class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs" />
                <button type="submit" ${activeEmp.length === 0 ? 'disabled' : ''} class="w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs uppercase rounded-lg shadow">
                  BAYARKAN & CETAK SLIP GAJI
                </button>
              </form>
            </div>

            <!-- Riwayat Pembayaran Gaji -->
            <div class="bg-white rounded-2xl border border-slate-200 p-5 shadow-xs">
              <h4 class="font-extrabold text-xs uppercase text-slate-600 mb-3">Riwayat Pembayaran & Slip Gaji</h4>
              <div class="space-y-2.5 max-h-64 overflow-y-auto">
                ${appState.db.penggajian.length === 0 ? `<p class="text-xs text-slate-400 text-center py-6">Belum ada riwayat pembayaran gaji.</p>` :
                  appState.db.penggajian.map(g => `
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs">
                      <div>
                        <p class="font-extrabold text-slate-900">${g.nama_karyawan} <span class="text-amber-700">(${g.bulan_periode})</span></p>
                        <p class="text-[11px] text-slate-500">Tgl: ${g.tanggal_bayar} • Dibayar: <strong class="text-emerald-700">${formatRupiah(g.total_dibayar)}</strong></p>
                      </div>
                      <div class="flex items-center gap-1.5 shrink-0">
                        <button onclick="openSlipGajiModal('${g.id}')" class="px-2.5 py-1.5 rounded theme-bg-primary text-amber-400 font-bold text-[11px] flex items-center gap-1">
                          <i data-lucide="printer" class="w-3.5 h-3.5"></i> Slip
                        </button>
                        <button onclick="openEditGajiModal('${g.id}')" class="p-1.5 rounded bg-white border border-slate-300 text-slate-700"><i data-lucide="pencil" class="w-3.5 h-3.5"></i></button>
                        <button onclick="deleteGaji('${g.id}')" class="p-1.5 rounded bg-white border border-slate-300 text-rose-600"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
                      </div>
                    </div>
                  `).join('')
                }
              </div>
            </div>
          </div>
        </div>
      `;
      lucide.createIcons();
    }

    window.prefillGajiPokok = function() {
      const sel = document.getElementById('gajiUserId');
      const opt = sel.options[sel.selectedIndex];
      document.getElementById('gajiPokok').value = opt?.getAttribute('data-gaji') || 0;
    };

    window.submitPenggajian = async function(e) {
      e.preventDefault();
      const userId = document.getElementById('gajiUserId').value;
      const emp = appState.db.karyawan.find(u => u.id === userId);
      if (!emp) return;

      const pokok = Number(document.getElementById('gajiPokok').value || 0);
      const bonus = Number(document.getElementById('gajiBonus').value || 0);
      const potongan = Number(document.getElementById('gajiPotongan').value || 0);
      const total = Math.max(0, pokok + bonus - potongan);

      const payload = {
        tanggal_bayar: todayStr,
        bulan_periode: document.getElementById('gajiPeriode').value,
        karyawan_id: emp.id,
        nama_karyawan: emp.nama_lengkap,
        jabatan: emp.jabatan,
        gaji_pokok: pokok,
        bonus_lembur: bonus,
        potongan: potongan,
        total_dibayar: total,
        catatan: document.getElementById('gajiCatatan').value.trim()
      };

      try {
        let newSlipId = '';
        if (!IS_PREVIEW && supabase) {
          const { data, error } = await supabase.from('penggajian').insert([payload]).select().single();
          if (error) throw error;
          appState.db.penggajian.unshift(data);
          newSlipId = data.id;
        } else {
          newSlipId = 'gji-' + Date.now();
          appState.db.penggajian.unshift({ id: newSlipId, ...payload });
        }
        showToast(`Gaji ${emp.nama_lengkap} (${formatRupiah(total)}) dibayarkan!`, 'success');
        renderKaryawanAndGaji(document.getElementById('appContent'));
        openSlipGajiModal(newSlipId);
      } catch (err) {
        showToast('Gagal menyimpan gaji: ' + err.message, 'error');
      }
    };

    window.openEditGajiModal = function(id) {
      const g = appState.db.penggajian.find(x => x.id === id);
      if (!g) return;
      document.getElementById('editGajiId').value = g.id;
      document.getElementById('editGajiNama').value = g.nama_karyawan;
      document.getElementById('editGajiPeriode').value = g.bulan_periode;
      document.getElementById('editGajiTanggal').value = g.tanggal_bayar;
      document.getElementById('editGajiPokok').value = g.gaji_pokok;
      document.getElementById('editGajiBonus').value = g.bonus_lembur;
      document.getElementById('editGajiPotongan').value = g.potongan;
      document.getElementById('editGajiCatatan').value = g.catatan || '';
      document.getElementById('editGajiModal').classList.remove('hidden');
      lucide.createIcons();
    };

    window.submitEditGaji = async function(e) {
      e.preventDefault();
      const id = document.getElementById('editGajiId').value;
      const g = appState.db.penggajian.find(x => x.id === id);
      if (!g) return;

      const pokok = Number(document.getElementById('editGajiPokok').value || 0);
      const bonus = Number(document.getElementById('editGajiBonus').value || 0);
      const potongan = Number(document.getElementById('editGajiPotongan').value || 0);
      const total = Math.max(0, pokok + bonus - potongan);

      const updates = {
        bulan_periode: document.getElementById('editGajiPeriode').value,
        tanggal_bayar: document.getElementById('editGajiTanggal').value,
        gaji_pokok: pokok,
        bonus_lembur: bonus,
        potongan: potongan,
        total_dibayar: total,
        catatan: document.getElementById('editGajiCatatan').value.trim()
      };

      try {
        if (!IS_PREVIEW && supabase) {
          const { error } = await supabase.from('penggajian').update(updates).eq('id', id);
          if (error) throw error;
        }
        Object.assign(g, updates);
        closeModal('editGajiModal');
        showToast('Slip gaji diperbarui!', 'success');
        renderKaryawanAndGaji(document.getElementById('appContent'));
      } catch (err) {
        showToast('Gagal update gaji: ' + err.message, 'error');
      }
    };

    window.deleteGaji = function(id) {
      showConfirmDialog('Hapus Slip Gaji', 'Hapus data pembayaran gaji ini?', async () => {
        try {
          if (!IS_PREVIEW && supabase) {
            const { error } = await supabase.from('penggajian').delete().eq('id', id);
            if (error) throw error;
          }
          appState.db.penggajian = appState.db.penggajian.filter(x => x.id !== id);
          showToast('Data gaji dihapus.', 'info');
          renderKaryawanAndGaji(document.getElementById('appContent'));
        } catch (err) {
          showToast('Gagal menghapus gaji: ' + err.message, 'error');
        }
      });
    };

    window.openSlipGajiModal = function(id) {
      const g = appState.db.penggajian.find(x => x.id === id);
      if (!g) return;
      const shop = getShopProfile();

      document.getElementById('slipGajiPrintArea').innerHTML = `
        <div class="flex items-center gap-4 border-b-4 border-double border-slate-900 pb-4 mb-5">
          ${shop.logo_url ? `<img src="${shop.logo_url}" alt="Logo" class="w-16 h-16 object-contain rounded-xl border border-slate-200 p-1" />` : ''}
          <div class="flex-1 text-center">
            <h2 class="text-lg font-extrabold uppercase tracking-wide text-slate-900">${shop.nama_toko}</h2>
            <p class="text-[11px] font-semibold text-slate-600">${shop.tagline}</p>
            <p class="text-[10px] text-slate-500 mt-0.5">${shop.alamat} • Telp: ${shop.telepon}</p>
          </div>
        </div>

        <div class="text-center mb-5">
          <h3 class="font-extrabold text-sm uppercase underline tracking-wider">SLIP GAJI KARYAWAN</h3>
        </div>

        <div class="grid grid-cols-2 gap-2 bg-slate-50 p-3.5 rounded-xl border border-slate-200 mb-5 text-[11px]">
          <div><span class="text-slate-500">Nama Karyawan:</span> <strong class="block text-slate-900">${g.nama_karyawan}</strong></div>
          <div><span class="text-slate-500">Periode Bulan:</span> <strong class="block text-slate-900">${g.bulan_periode}</strong></div>
          <div><span class="text-slate-500">Jabatan:</span> <strong class="block text-slate-900">${g.jabatan || 'Karyawan'}</strong></div>
          <div><span class="text-slate-500">Tanggal Bayar:</span> <strong class="block text-slate-900">${g.tanggal_bayar}</strong></div>
        </div>

        <table class="w-full text-xs border-collapse mb-5">
          <thead>
            <tr style="background:#0B192C; color:#ffffff;">
              <th class="p-2.5 text-left">Komponen Gaji</th>
              <th class="p-2.5 text-right">Nominal</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-200 border border-slate-200">
            <tr><td class="p-2.5">Gaji Pokok</td><td class="p-2.5 text-right font-semibold">${formatRupiah(g.gaji_pokok)}</td></tr>
            <tr><td class="p-2.5 text-emerald-700">+ Bonus / Lembur</td><td class="p-2.5 text-right font-semibold text-emerald-700">${formatRupiah(g.bonus_lembur)}</td></tr>
            <tr><td class="p-2.5 text-rose-700">- Potongan</td><td class="p-2.5 text-right font-semibold text-rose-700">(${formatRupiah(g.potongan)})</td></tr>
            <tr class="bg-amber-50 font-extrabold text-sm">
              <td class="p-3 text-slate-900">TOTAL GAJI DITERIMA</td>
              <td class="p-3 text-right text-slate-950">${formatRupiah(g.total_dibayar)}</td>
            </tr>
          </tbody>
        </table>

        ${g.catatan ? `<p class="text-[11px] italic text-slate-600 mb-6">Catatan: ${g.catatan}</p>` : ''}

        <div class="grid grid-cols-2 gap-8 text-center text-[11px] pt-4">
          <div><p class="text-slate-500 mb-12">Penerima (Karyawan),</p><p class="font-bold underline">${g.nama_karyawan}</p></div>
          <div><p class="text-slate-500 mb-12">Disetujui Oleh (Admin),</p><p class="font-bold underline">${appState.currentUser.nama}</p></div>
        </div>
      `;

      document.getElementById('btnShareWaSlipGaji').onclick = () => {
        const text = `*SLIP GAJI - ${shop.nama_toko.toUpperCase()}*\nPeriode: *${g.bulan_periode}* | Tgl: ${g.tanggal_bayar}\nNama: *${g.nama_karyawan}*\n--------------------------------\nGaji Pokok: ${formatRupiah(g.gaji_pokok)}\nBonus: +${formatRupiah(g.bonus_lembur)}\nPotongan: -${formatRupiah(g.potongan)}\n*TOTAL DITERIMA: ${formatRupiah(g.total_dibayar)}*`;
        window.open(`https://wa.me/?text=${encodeURIComponent(text)}`, '_blank');
      };

      document.getElementById('slipGajiModal').classList.remove('hidden');
      lucide.createIcons();
    };

    window.openEmployeeModal = function(id = '') {
      const isEdit = Boolean(id);
      document.getElementById('employeeModalTitle').textContent = isEdit ? 'Edit User Karyawan' : 'Tambah User Karyawan';
      if (isEdit) {
        const u = appState.db.karyawan.find(x => x.id === id);
        document.getElementById('empId').value = u.id;
        document.getElementById('empNama').value = u.nama_lengkap;
        document.getElementById('empUser').value = u.username;
        document.getElementById('empPass').value = u.password;
        document.getElementById('empJabatan').value = u.jabatan;
        document.getElementById('empGaji').value = u.gaji_pokok;
        document.getElementById('empStatus').value = u.status;
      } else {
        document.getElementById('empId').value = '';
        document.getElementById('empNama').value = '';
        document.getElementById('empUser').value = '';
        document.getElementById('empPass').value = '';
        document.getElementById('empJabatan').value = 'Kasir & Operator';
        document.getElementById('empGaji').value = 2500000;
        document.getElementById('empStatus').value = 'Aktif';
      }
      document.getElementById('employeeModal').classList.remove('hidden');
      lucide.createIcons();
    };

    window.submitEmployeeForm = async function(e) {
      e.preventDefault();
      const id = document.getElementById('empId').value;
      const payload = {
        nama_lengkap: document.getElementById('empNama').value.trim(),
        username: document.getElementById('empUser').value.trim(),
        password: document.getElementById('empPass').value.trim(),
        jabatan: document.getElementById('empJabatan').value.trim(),
        gaji_pokok: Number(document.getElementById('empGaji').value),
        status: document.getElementById('empStatus').value
      };

      try {
        if (!IS_PREVIEW && supabase) {
          if (id) {
            const { data, error } = await supabase.from('karyawan').update(payload).eq('id', id).select().single();
            if (error) throw error;
            const idx = appState.db.karyawan.findIndex(x => x.id === id);
            if (idx > -1) appState.db.karyawan[idx] = data;
          } else {
            const { data, error } = await supabase.from('karyawan').insert([payload]).select().single();
            if (error) throw error;
            appState.db.karyawan.unshift(data);
          }
        } else {
          if (id) {
            const idx = appState.db.karyawan.findIndex(x => x.id === id);
            if (idx > -1) appState.db.karyawan[idx] = { id, ...payload };
          } else {
            appState.db.karyawan.unshift({ id: 'emp-' + Date.now(), ...payload });
          }
        }
        closeModal('employeeModal');
        showToast('Data karyawan berhasil disimpan!', 'success');
        renderKaryawanAndGaji(document.getElementById('appContent'));
      } catch (err) {
        showToast('Gagal menyimpan karyawan: ' + err.message, 'error');
      }
    };

    window.deleteEmployee = function(id) {
      showConfirmDialog('Hapus User Karyawan', 'Akun karyawan ini akan dihapus permanen. Lanjutkan?', async () => {
        try {
          if (!IS_PREVIEW && supabase) {
            const { error } = await supabase.from('karyawan').delete().eq('id', id);
            if (error) throw error;
          }
          appState.db.karyawan = appState.db.karyawan.filter(x => x.id !== id);
          showToast('Akun karyawan dihapus.', 'info');
          renderKaryawanAndGaji(document.getElementById('appContent'));
        } catch (err) {
          showToast('Gagal menghapus karyawan: ' + err.message, 'error');
        }
      });
    };

    // ==================== 16. LAPORAN KOP SURAT (PDF, WORD .DOC & EXCEL .XLS) ====================
    function getFilteredReportData() {
      const start = appState.reportStartDate;
      const end = appState.reportEndDate;
      const inRange = (dStr) => {
        if (!start && !end) return true;
        if (start && dStr < start) return false;
        if (end && dStr > end) return false;
        return true;
      };

      const trxs = appState.db.transaksi.filter(t => inRange(t.tanggal));
      const belis = appState.db.pembelian_atk.filter(b => inRange(b.tanggal));
      const gajis = appState.db.penggajian.filter(g => inRange(g.tanggal_bayar));

      const totalOmset = trxs.reduce((s, t) => s + Number(t.total_tagihan || 0), 0);
      const totalKasMasuk = trxs.reduce((s, t) => s + Number(t.jumlah_bayar || 0), 0);
      const totalPiutang = trxs.reduce((s, t) => s + Number(t.sisa_tagihan || 0), 0);
      const totalHPP = trxs.reduce((s, t) => s + Number(t.total_modal || 0), 0);
      const totalPembelian = belis.reduce((s, b) => s + Number(b.total_pengeluaran || 0), 0);
      const totalGaji = gajis.reduce((s, g) => s + Number(g.total_dibayar || 0), 0);
      const labaKotor = totalOmset - totalHPP;
      const profitBersih = labaKotor - totalGaji;

      return { start, end, trxs, belis, gajis, totalOmset, totalKasMasuk, totalPiutang, totalHPP, totalPembelian, totalGaji, labaKotor, profitBersih };
    }

    function renderLaporan(container) {
      const shop = getShopProfile();
      const d = getFilteredReportData();
      const periodeLabel = (d.start || d.end) ? `${d.start || 'Awal'} s/d ${d.end || 'Sekarang'}` : 'Semua Periode';

      container.innerHTML = `
        <div class="space-y-5 fade-in">
          <!-- Filter & Export Bar -->
          <div class="glass-card p-4 rounded-2xl flex flex-col lg:flex-row lg:items-center justify-between gap-3 no-print">
            <div class="flex flex-wrap items-center gap-2">
              <input type="date" value="${d.start}" onchange="appState.reportStartDate=this.value; renderLaporan(document.getElementById('appContent'))"
                class="px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
              <span class="text-xs font-bold text-slate-400">s/d</span>
              <input type="date" value="${d.end}" onchange="appState.reportEndDate=this.value; renderLaporan(document.getElementById('appContent'))"
                class="px-3 py-2 bg-slate-50 border border-slate-300 rounded-lg text-xs font-bold" />
              <button onclick="appState.reportStartDate='${todayStr}'; appState.reportEndDate='${todayStr}'; renderLaporan(document.getElementById('appContent'))" class="px-3 py-2 bg-slate-100 hover:bg-slate-200 rounded-lg text-xs font-bold">Hari Ini</button>
              <button onclick="appState.reportStartDate=''; appState.reportEndDate=''; renderLaporan(document.getElementById('appContent'))" class="px-3 py-2 bg-slate-100 hover:bg-slate-200 rounded-lg text-xs font-bold">Semua</button>
            </div>

            <div class="flex flex-wrap items-center gap-2">
              <button onclick="printTargetSection('report')" class="px-3.5 py-2.5 bg-rose-600 hover:bg-rose-700 text-white font-bold text-xs rounded-lg shadow flex items-center gap-1.5">
                <i data-lucide="printer" class="w-4 h-4"></i>
                <span>Cetak / PDF</span>
              </button>
              <button onclick="exportReportWord()" class="px-3.5 py-2.5 theme-bg-primary text-white font-bold text-xs rounded-lg shadow flex items-center gap-1.5">
                <i data-lucide="file-text" class="w-4 h-4 theme-text-accent"></i>
                <span>Export Word (.doc)</span>
              </button>
              <button onclick="exportReportExcel()" class="px-3.5 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-lg shadow flex items-center gap-1.5">
                <i data-lucide="file-spreadsheet" class="w-4 h-4"></i>
                <span>Export Excel (.xls)</span>
              </button>
            </div>
          </div>

          <!-- DOKUMEN LAPORAN RESMI BERKOP SURAT -->
          <div id="reportPrintArea" class="bg-white p-6 md:p-10 rounded-2xl border border-slate-200 shadow-sm space-y-6">
            <!-- KOP SURAT RESMI -->
            <div class="flex flex-col sm:flex-row items-center gap-4 border-b-4 border-double border-slate-900 pb-5">
              ${shop.logo_url ? `
                <img src="${shop.logo_url}" alt="Logo" class="w-20 h-20 object-contain rounded-xl border border-slate-200 p-1.5 shrink-0" />
              ` : `
                <div class="w-16 h-16 rounded-xl theme-bg-primary text-amber-400 flex items-center justify-center shrink-0">
                  <i data-lucide="printer" class="w-8 h-8"></i>
                </div>
              `}
              <div class="flex-1 text-center sm:text-left">
                <h2 class="font-printx text-xl md:text-2xl font-black uppercase tracking-wide text-slate-950">${shop.nama_toko}</h2>
                <p class="text-xs font-bold text-amber-700">${shop.tagline}</p>
                <p class="text-xs text-slate-600 mt-1">${shop.alamat}</p>
                <p class="text-xs font-semibold text-slate-700">Telepon / WhatsApp: ${shop.telepon}</p>
              </div>
              <div class="text-center sm:text-right shrink-0">
                <span class="px-3 py-1 rounded theme-bg-primary text-amber-400 text-[10px] font-extrabold uppercase tracking-wider">Laporan Keuangan</span>
                <p class="text-[11px] font-bold text-slate-700 mt-1.5">Periode: ${periodeLabel}</p>
                <p class="text-[10px] text-slate-500">Dicetak: ${todayStr}</p>
              </div>
            </div>

            <!-- Rekapitulasi Laba Rugi -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3.5">
              <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-[10px] font-extrabold text-slate-500 uppercase">Total Omset</span>
                <p class="text-base sm:text-lg font-extrabold text-slate-900 mt-1">${formatRupiah(d.totalOmset)}</p>
                <p class="text-[10px] text-slate-500">Kas Masuk: ${formatRupiah(d.totalKasMasuk)}</p>
              </div>
              <div class="p-4 rounded-xl bg-slate-50 border border-slate-200">
                <span class="text-[10px] font-extrabold text-slate-500 uppercase">Laba Kotor (Omset - HPP)</span>
                <p class="text-base sm:text-lg font-extrabold text-slate-900 mt-1">${formatRupiah(d.labaKotor)}</p>
                <p class="text-[10px] text-slate-500">HPP: ${formatRupiah(d.totalHPP)}</p>
              </div>
              <div class="p-4 rounded-xl bg-rose-50 border border-rose-200">
                <span class="text-[10px] font-extrabold text-rose-800 uppercase">Pembelian & Gaji</span>
                <p class="text-base sm:text-lg font-extrabold text-rose-600 mt-1">${formatRupiah(d.totalPembelian + d.totalGaji)}</p>
                <p class="text-[10px] text-slate-600">Beli: ${formatRupiah(d.totalPembelian)} | Gaji: ${formatRupiah(d.totalGaji)}</p>
              </div>
              <div class="p-4 rounded-xl bg-emerald-600 text-white">
                <span class="text-[10px] font-extrabold text-emerald-100 uppercase">Profit Bersih</span>
                <p class="text-base sm:text-lg font-extrabold mt-1">${formatRupiah(d.profitBersih)}</p>
                <p class="text-[10px] text-emerald-100">Piutang DP: ${formatRupiah(d.totalPiutang)}</p>
              </div>
            </div>

            <!-- Sub-Tabs Navigasi Layar -->
            <div class="flex border-b border-slate-200 gap-2 no-print">
              ${[
                { id: 'penjualan', label: `1. Penjualan (${d.trxs.length})` },
                { id: 'pembelian', label: `2. Pembelian ATK (${d.belis.length})` },
                { id: 'gaji', label: `3. Penggajian (${d.gajis.length})` }
              ].map(t => `
                <button onclick="appState.reportSubTab='${t.id}'; renderLaporan(document.getElementById('appContent'))"
                  class="px-4 py-2 rounded-t-lg text-xs font-extrabold transition ${
                    appState.reportSubTab === t.id ? 'theme-bg-primary text-amber-400' : 'bg-slate-100 text-slate-600'
                  }">
                  ${t.label}
                </button>
              `).join('')}
            </div>

            <!-- Tabel Penjualan -->
            <div class="${appState.reportSubTab !== 'penjualan' ? 'hidden' : ''} space-y-2">
              <h4 class="font-extrabold text-xs uppercase text-slate-800">A. Rincian Penjualan ATK & Jasa</h4>
              <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border border-slate-300">
                  <thead class="bg-slate-100 text-slate-800 uppercase border-b border-slate-300">
                    <tr>
                      <th class="p-2.5 border-r border-slate-300">Invoice & Tanggal</th>
                      <th class="p-2.5 border-r border-slate-300">Pelanggan</th>
                      <th class="p-2.5 border-r border-slate-300">Status</th>
                      <th class="p-2.5 border-r border-slate-300 text-right">Omset</th>
                      <th class="p-2.5 text-right">Profit Item</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-slate-200">
                    ${d.trxs.length === 0 ? `<tr><td colspan="5" class="p-4 text-center text-slate-400">Tidak ada transaksi pada periode ini.</td></tr>` :
                      d.trxs.map(t => `
                        <tr>
                          <td class="p-2.5 border-r border-slate-300 font-bold">${t.no_invoice} (${t.tanggal})</td>
                          <td class="p-2.5 border-r border-slate-300">${t.nama_pelanggan}</td>
                          <td class="p-2.5 border-r border-slate-300 font-bold">${t.status_bayar}</td>
                          <td class="p-2.5 border-r border-slate-300 text-right font-bold">${formatRupiah(t.total_tagihan)}</td>
                          <td class="p-2.5 text-right font-bold text-emerald-700">${formatRupiah(Number(t.total_tagihan) - Number(t.total_modal))}</td>
                        </tr>
                      `).join('')
                    }
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Tabel Pembelian -->
            <div class="${appState.reportSubTab !== 'pembelian' ? 'hidden' : ''} space-y-2">
              <h4 class="font-extrabold text-xs uppercase text-slate-800">B. Rincian Pembelian Stok ATK</h4>
              <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border border-slate-300">
                  <thead class="bg-slate-100 text-slate-800 uppercase border-b border-slate-300">
                    <tr>
                      <th class="p-2.5 border-r border-slate-300">Tanggal</th>
                      <th class="p-2.5 border-r border-slate-300">Supplier</th>
                      <th class="p-2.5 border-r border-slate-300">Nama Item</th>
                      <th class="p-2.5 border-r border-slate-300 text-center">Qty</th>
                      <th class="p-2.5 text-right">Total Pengeluaran</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-slate-200">
                    ${d.belis.length === 0 ? `<tr><td colspan="5" class="p-4 text-center text-slate-400">Tidak ada pembelian stok pada periode ini.</td></tr>` :
                      d.belis.map(b => `
                        <tr>
                          <td class="p-2.5 border-r border-slate-300">${b.tanggal}</td>
                          <td class="p-2.5 border-r border-slate-300">${b.supplier}</td>
                          <td class="p-2.5 border-r border-slate-300 font-bold">${b.nama_item}</td>
                          <td class="p-2.5 border-r border-slate-300 text-center">${b.qty_beli}</td>
                          <td class="p-2.5 text-right font-bold text-rose-700">${formatRupiah(b.total_pengeluaran)}</td>
                        </tr>
                      `).join('')
                    }
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Tabel Penggajian -->
            <div class="${appState.reportSubTab !== 'gaji' ? 'hidden' : ''} space-y-2">
              <h4 class="font-extrabold text-xs uppercase text-slate-800">C. Rincian Penggajian Karyawan</h4>
              <div class="overflow-x-auto">
                <table class="w-full text-left text-xs border border-slate-300">
                  <thead class="bg-slate-100 text-slate-800 uppercase border-b border-slate-300">
                    <tr>
                      <th class="p-2.5 border-r border-slate-300">Tgl Bayar</th>
                      <th class="p-2.5 border-r border-slate-300">Periode</th>
                      <th class="p-2.5 border-r border-slate-300">Nama Karyawan</th>
                      <th class="p-2.5 text-right">Total Dibayar</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-slate-200">
                    ${d.gajis.length === 0 ? `<tr><td colspan="4" class="p-4 text-center text-slate-400">Tidak ada pembayaran gaji pada periode ini.</td></tr>` :
                      d.gajis.map(g => `
                        <tr>
                          <td class="p-2.5 border-r border-slate-300">${g.tanggal_bayar}</td>
                          <td class="p-2.5 border-r border-slate-300 font-bold">${g.bulan_periode}</td>
                          <td class="p-2.5 border-r border-slate-300 font-bold">${g.nama_karyawan}</td>
                          <td class="p-2.5 text-right font-bold text-rose-700">${formatRupiah(g.total_dibayar)}</td>
                        </tr>
                      `).join('')
                    }
                  </tbody>
                </table>
              </div>
            </div>

            <!-- Tanda Tangan Resmi -->
            <div class="pt-6 flex justify-end text-xs">
              <div class="text-center w-56">
                <p class="text-slate-600">Mengetahui, Admin Utama</p>
                <p class="font-bold text-slate-900">${shop.nama_toko}</p>
                <div class="h-14"></div>
                <p class="font-extrabold underline text-slate-950">${appState.currentUser.nama}</p>
              </div>
            </div>
          </div>
        </div>
      `;
      lucide.createIcons();
    }

    window.exportReportWord = function() {
      const shop = getShopProfile();
      const d = getFilteredReportData();
      const periodeLabel = (d.start || d.end) ? `${d.start || 'Awal'} s/d ${d.end || 'Sekarang'}` : 'Semua Periode';

      const docHtml = `
        <html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'>
        <head><meta charset='utf-8'>
        <style>
          body { font-family: Arial, sans-serif; font-size: 11pt; }
          table { width: 100%; border-collapse: collapse; margin-bottom: 14px; font-size: 10pt; }
          th, td { border: 1px solid #444; padding: 6px 8px; }
          th { background-color: #0B192C; color: #FBBF24; text-align: left; }
          .right { text-align: right; }
        </style>
        </head>
        <body>
          <div style="border-bottom: 3px double #000; padding-bottom: 10px; margin-bottom: 14px; text-align: center;">
            <h2 style="margin:0; text-transform:uppercase;">${shop.nama_toko}</h2>
            <p style="margin:2px 0; font-weight:bold;">${shop.tagline}</p>
            <p style="margin:2px 0; font-size:9pt;">${shop.alamat} | Telp/WA: ${shop.telepon}</p>
          </div>
          <h3 style="text-align:center;">LAPORAN KEUANGAN (${periodeLabel})</h3>
          <table>
            <tr><th>Total Omset</th><td class="right"><strong>${formatRupiah(d.totalOmset)}</strong></td></tr>
            <tr><th>Laba Kotor (Omset - HPP)</th><td class="right">${formatRupiah(d.labaKotor)}</td></tr>
            <tr><th>Pembelian Stok ATK</th><td class="right">${formatRupiah(d.totalPembelian)}</td></tr>
            <tr><th>Penggajian Karyawan</th><td class="right">${formatRupiah(d.totalGaji)}</td></tr>
            <tr style="background:#dcfce7;"><th>PROFIT BERSIH</th><td class="right"><strong>${formatRupiah(d.profitBersih)}</strong></td></tr>
          </table>
          <h4>Rincian Penjualan</h4>
          <table>
            <thead><tr><th>Invoice</th><th>Tanggal</th><th>Pelanggan</th><th>Status</th><th class="right">Omset</th></tr></thead>
            <tbody>${d.trxs.map(t => `<tr><td>${t.no_invoice}</td><td>${t.tanggal}</td><td>${t.nama_pelanggan}</td><td>${t.status_bayar}</td><td class="right">${formatRupiah(t.total_tagihan)}</td></tr>`).join('')}</tbody>
          </table>
          <div style="text-align:right; margin-top:24px;">
            <p>Mengetahui, Admin Utama ${shop.nama_toko}</p><br/><br/>
            <p><u><strong>${appState.currentUser.nama}</strong></u></p>
          </div>
        </body></html>
      `;

      const blob = new Blob(['\ufeff', docHtml], { type: 'application/msword' });
      const a = document.createElement('a');
      a.href = URL.createObjectURL(blob);
      a.download = `Laporan_${shop.nama_toko.replace(/\s+/g, '_')}_${todayStr}.doc`;
      a.click();
      showToast('Laporan Word (.doc) berhasil diunduh!', 'success');
    };

    window.exportReportExcel = function() {
      const shop = getShopProfile();
      const d = getFilteredReportData();
      const periodeLabel = (d.start || d.end) ? `${d.start || 'Awal'} s/d ${d.end || 'Sekarang'}` : 'Semua Periode';

      const excelHtml = `
        <html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
        <head><meta charset="utf-8" /></head>
        <body>
          <table border="1">
            <tr><th colspan="5" style="font-size:15pt; background:#0B192C; color:#FBBF24;">${shop.nama_toko.toUpperCase()}</th></tr>
            <tr><th colspan="5">${shop.alamat} | Telp: ${shop.telepon}</th></tr>
            <tr><th colspan="5">LAPORAN KEUANGAN (PERIODE: ${periodeLabel})</th></tr>
            <tr><td>Total Omset</td><td>${d.totalOmset}</td><td>Profit Bersih</td><td>${d.profitBersih}</td><td>Piutang DP: ${d.totalPiutang}</td></tr>
            <tr><td colspan="5"></td></tr>
            <tr style="background:#E2E8F0; font-weight:bold;"><th>No. Invoice</th><th>Tanggal</th><th>Pelanggan</th><th>Status</th><th>Omset (Rp)</th></tr>
            ${d.trxs.map(t => `<tr><td>${t.no_invoice}</td><td>${t.tanggal}</td><td>${t.nama_pelanggan}</td><td>${t.status_bayar}</td><td>${t.total_tagihan}</td></tr>`).join('')}
          </table>
        </body></html>
      `;

      const blob = new Blob(['\ufeff', excelHtml], { type: 'application/vnd.ms-excel' });
      const a = document.createElement('a');
      a.href = URL.createObjectURL(blob);
      a.download = `Laporan_${shop.nama_toko.replace(/\s+/g, '_')}_${todayStr}.xls`;
      a.click();
      showToast('Laporan Excel (.xls) berhasil diunduh!', 'success');
    };

    // ==================== 17. PROFIL TOKO, LOGO & 6 PILIHAN TEMA ====================
    function renderProfilToko(container) {
      const shop = getShopProfile();
      const activeTheme = shop.tema_aktif || 'printx-navy';

      container.innerHTML = `
        <div class="max-w-4xl mx-auto space-y-6 fade-in">
          <!-- CARD 1: 6 PILIHAN TEMA WARNA WEBSITE -->
          <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="p-6 theme-bg-primary text-white border-b-2 border-amber-400">
              <h3 class="font-printx font-extrabold text-base uppercase flex items-center gap-2">
                <i data-lucide="palette" class="w-5 h-5 theme-text-accent"></i>
                <span>Pilihan Tema Warna Website</span>
              </h3>
              <p class="text-xs text-white/75 mt-1">Ganti tema tampilan aplikasi secara instan sesuai identitas brand toko Anda.</p>
            </div>

            <div class="p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
              ${Object.values(APP_THEMES).map(t => {
                const selected = activeTheme === t.id;
                return `
                  <div onclick="selectShopTheme('${t.id}')"
                    class="cursor-pointer rounded-xl border-2 p-4 transition flex flex-col justify-between ${
                      selected ? 'border-slate-900 bg-slate-50 shadow-md' : 'border-slate-200 bg-white hover:border-slate-400'
                    }">
                    <div>
                      <div class="h-10 rounded-lg overflow-hidden flex border border-black/10 mb-3">
                        <div style="background:${t.sidebarBg};" class="w-1/3 h-full"></div>
                        <div style="background:${t.primaryMid};" class="w-1/3 h-full"></div>
                        <div style="background:${t.accent};" class="w-1/3 h-full"></div>
                      </div>
                      <div class="flex items-center justify-between gap-1">
                        <h4 class="font-extrabold text-xs text-slate-900">${t.name}</h4>
                        ${selected ? `<span class="px-2 py-0.5 rounded bg-emerald-600 text-white text-[10px] font-bold">Aktif</span>` : ''}
                      </div>
                      <p class="text-[11px] text-slate-500 mt-1 leading-relaxed">${t.desc}</p>
                    </div>
                  </div>
                `;
              }).join('')}
            </div>
          </div>

          <!-- CARD 2: PROFIL & LOGO TOKO -->
          <div class="bg-white rounded-2xl border border-slate-200 shadow-xs overflow-hidden">
            <div class="p-6 theme-bg-primary text-white border-b-2 border-amber-400">
              <h3 class="font-printx font-extrabold text-base uppercase flex items-center gap-2">
                <i data-lucide="store" class="w-5 h-5 theme-text-accent"></i>
                <span>Identitas, Logo & Detail Toko</span>
              </h3>
              <p class="text-xs text-white/75 mt-1">Data ini otomatis tampil di aplikasi, nota (Thermal/PDF/Word), slip gaji, dan KOP surat laporan.</p>
            </div>

            <form onsubmit="submitShopProfile(event)" class="p-6 space-y-4">
              <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-center gap-4">
                <div class="w-20 h-20 rounded-xl bg-white border-2 border-dashed border-slate-300 flex items-center justify-center overflow-hidden shrink-0">
                  ${shop.logo_url ? `<img src="${shop.logo_url}" class="w-full h-full object-contain p-1" />` : `<i data-lucide="image-plus" class="w-7 h-7 text-slate-400"></i>`}
                </div>
                <div class="flex-1 text-center sm:text-left space-y-2">
                  <h4 class="font-extrabold text-xs uppercase text-slate-900">Logo / Gambar Toko</h4>
                  <p class="text-[11px] text-slate-500">Pilih file gambar PNG/JPG (otomatis dikompresi agar ringan).</p>
                  <div class="flex flex-wrap justify-center sm:justify-start gap-2">
                    <label class="px-3.5 py-2 theme-btn-accent font-extrabold text-xs rounded-lg cursor-pointer shadow-xs">
                      <span>Pilih Gambar Logo</span>
                      <input type="file" accept="image/*" onchange="handleLogoUpload(event)" class="hidden" />
                    </label>
                    ${shop.logo_url ? `<button type="button" onclick="resetShopLogo()" class="px-3 py-2 bg-rose-50 text-rose-600 font-bold text-xs rounded-lg border border-rose-200">Hapus Logo</button>` : ''}
                  </div>
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">Nama Toko *</label>
                  <input type="text" id="profNamaToko" required value="${shop.nama_toko}" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold" />
                </div>
                <div>
                  <label class="block text-xs font-bold text-slate-700 mb-1">Nomor Telepon / WhatsApp *</label>
                  <input type="text" id="profTelepon" required value="${shop.telepon}" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-bold" />
                </div>
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Tagline Usaha</label>
                <input type="text" id="profTagline" required value="${shop.tagline}" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm font-medium" />
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Alamat Lengkap Toko *</label>
                <textarea id="profAlamat" rows="2" required class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-sm">${shop.alamat}</textarea>
              </div>

              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Catatan Kaki Nota Pelanggan</label>
                <input type="text" id="profFooterNota" value="${shop.catatan_nota}" class="w-full p-2.5 bg-slate-50 border border-slate-300 rounded-lg text-xs" />
              </div>

              <div class="pt-2 flex justify-end">
                <button type="submit" class="px-6 py-3 theme-btn-accent font-printx font-extrabold text-xs uppercase rounded-lg shadow-lg flex items-center gap-2">
                  <i data-lucide="save" class="w-4 h-4"></i>
                  <span>SIMPAN PROFIL TOKO</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      `;
      lucide.createIcons();
    }

    window.selectShopTheme = async function(themeId) {
      if (!APP_THEMES[themeId]) return;
      appState.db.pengaturan_toko.tema_aktif = themeId;
      applyShopBranding();
      renderNavigation();
      renderProfilToko(document.getElementById('appContent'));

      if (!IS_PREVIEW && supabase) {
        await supabase.from('pengaturan_toko').upsert([appState.db.pengaturan_toko]);
      }
      showToast(`Tema "${APP_THEMES[themeId].name}" diterapkan!`, 'success');
    };

    window.handleLogoUpload = function(event) {
      const file = event.target.files[0];
      if (!file) return;
      const reader = new FileReader();
      reader.onload = function(e) {
        const img = new Image();
        img.onload = async function() {
          const canvas = document.createElement('canvas');
          const maxDim = 220;
          let w = img.width, h = img.height;
          if (w > h && w > maxDim) { h *= maxDim / w; w = maxDim; }
          else if (h > maxDim) { w *= maxDim / h; h = maxDim; }
          canvas.width = w;
          canvas.height = h;
          canvas.getContext('2d').drawImage(img, 0, 0, w, h);

          appState.db.pengaturan_toko.logo_url = canvas.toDataURL('image/png', 0.85);
          applyShopBranding();
          renderProfilToko(document.getElementById('appContent'));
          if (!IS_PREVIEW && supabase) {
            await supabase.from('pengaturan_toko').upsert([appState.db.pengaturan_toko]);
          }
          showToast('Logo toko berhasil diperbarui!', 'success');
        };
        img.src = e.target.result;
      };
      reader.readAsDataURL(file);
    };

    window.resetShopLogo = async function() {
      appState.db.pengaturan_toko.logo_url = '';
      applyShopBranding();
      renderProfilToko(document.getElementById('appContent'));
      if (!IS_PREVIEW && supabase) {
        await supabase.from('pengaturan_toko').upsert([appState.db.pengaturan_toko]);
      }
      showToast('Logo dikembalikan ke ikon bawaan.', 'info');
    };

    window.submitShopProfile = async function(e) {
      e.preventDefault();
      const updated = {
        ...appState.db.pengaturan_toko,
        id: 'default',
        nama_toko: document.getElementById('profNamaToko').value.trim(),
        telepon: document.getElementById('profTelepon').value.trim(),
        tagline: document.getElementById('profTagline').value.trim(),
        alamat: document.getElementById('profAlamat').value.trim(),
        catatan_nota: document.getElementById('profFooterNota').value.trim(),
        updated_at: new Date().toISOString()
      };

      try {
        if (!IS_PREVIEW && supabase) {
          const { error } = await supabase.from('pengaturan_toko').upsert([updated]);
          if (error) throw error;
        }
        appState.db.pengaturan_toko = updated;
        applyShopBranding();
        showToast('Profil toko berhasil disimpan!', 'success');
      } catch (err) {
        showToast('Gagal menyimpan profil toko: ' + err.message, 'error');
      }
    };

    // ==================== 18. BOOTSTRAP & SESSION CHECK ====================
    window.addEventListener('DOMContentLoaded', async () => {
      applyShopBranding();
      lucide.createIcons();

      if (IS_PREVIEW) {
        document.getElementById('loginPreviewIndicator').classList.remove('hidden');
        document.getElementById('previewQuickLoginBox').classList.remove('hidden');
      } else {
        // Production Mode: Check existing Supabase Auth Session or Karyawan Session
        if (supabase) {
          const { data: { session } } = await supabase.auth.getSession();
          if (session && session.user) {
            appState.currentUser = {
              id: session.user.id,
              nama: session.user.email.split('@')[0].toUpperCase() + ' (Admin Utama)',
              role: 'Admin',
              jabatan: 'Admin Utama'
            };
            await loadAllSupabaseData();
            initAuthenticatedShell();
            return;
          }

          const empSess = sessionStorage.getItem('kshop_karyawan_session');
          if (empSess) {
            try {
              const emp = JSON.parse(empSess);
              appState.currentUser = {
                id: emp.id,
                nama: emp.nama_lengkap,
                role: 'Karyawan',
                jabatan: emp.jabatan
              };
              await loadAllSupabaseData();
              initAuthenticatedShell();
              return;
            } catch (e) {}
          }
        }
      }
    });
  </script>
</body>
</html>
