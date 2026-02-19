// ============================================================
// Central Config — Saari URLs yahan se import karo
// Kisi bhi file mein hardcoded URL ya || fallback mat lagao
// ============================================================

export const ADMIN_URL = import.meta.env.VITE_ADMIN_URL;
export const SITE_URL  = import.meta.env.VITE_SITE_URL;
export const API_BASE_URL = import.meta.env.VITE_API_BASE_URL;

// Admin storage base URL (images/files ke liye)
export const API_URL = `${ADMIN_URL}/storage/`;

// Admin storage URL without trailing slash (logo_path etc ke liye)
export const ADMIN_STORAGE_URL = `${ADMIN_URL}/storage`;
