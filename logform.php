<form name="frmlogin" method="post" action="logerror.php" class="modern-login-form">
  <div class="form-group-custom">
    <label for="uname_input" class="form-label-custom">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
      <span>පරිශීලක නම (Username)</span>
    </label>
    <input 
      type="text" 
      name="uname" 
      id="uname_input" 
      class="form-control-custom" 
      placeholder="පරිශීලක නම ඇතුලත් කරන්න" 
      required 
      autocomplete="username"
    />
  </div>

  <div class="form-group-custom">
    <label for="pwd_input" class="form-label-custom">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
      <span>මුරපදය (Password)</span>
    </label>
    <input 
      type="password" 
      name="pwd" 
      id="pwd_input" 
      class="form-control-custom" 
      placeholder="මුරපදය ඇතුලත් කරන්න" 
      required 
      autocomplete="current-password"
    />
  </div>

  <button type="submit" name="submit" class="btn-login-submit">
    <span>ඇතුලත් වන්න</span>
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
  </button>
</form>

<style>
.modern-login-form {
  width: 100%;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.form-group-custom {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.form-label-custom {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.85rem;
  font-weight: 500;
  color: #94a3b8;
  margin: 0;
}

.form-control-custom {
  width: 100% !important;
  background-color: #334155 !important;
  border: 1px solid #475569 !important;
  border-radius: 12px !important;
  color: #ffffff !important;
  padding: 12px 16px !important;
  font-size: 0.95rem !important;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif !important;
  transition: all 0.25s ease !important;
  box-sizing: border-box !important;
}

.form-control-custom:focus {
  border-color: #38bdf8 !important;
  background-color: #1e293b !important;
  outline: none !important;
  box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.25) !important;
}

.form-control-custom::placeholder {
  color: #64748b;
  font-size: 0.85rem;
}

.btn-login-submit {
  width: 100%;
  background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
  color: #ffffff;
  border: none;
  padding: 13px 20px;
  border-radius: 12px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  box-shadow: 0 4px 14px rgba(37, 99, 235, 0.4);
  transition: all 0.25s ease;
  font-family: 'Noto Sans Sinhala', 'Inter', sans-serif;
  margin-top: 6px;
}

.btn-login-submit:hover {
  background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(37, 99, 235, 0.5);
}

.btn-login-submit:active {
  transform: translateY(0);
}
</style>