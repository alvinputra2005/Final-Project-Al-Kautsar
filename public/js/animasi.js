const catalogContainer = document.getElementById('catalog-container');
const paginationContainer = document.getElementById('pagination');
const filterCampus = document.getElementById('filter-campus');
const filterBatch = document.getElementById('filter-batch');

const itemsPerPage = 12;
let currentPage = 1;
let filteredData = katalogSantri;

function applyFilters() {
  const campus = filterCampus.value;
  const batch = filterBatch.value;

  filteredData = katalogSantri.filter(item => {
    const campusMatch = campus === "all" || item.campus === campus;
    const batchMatch = batch === "all" || item.batch === batch;
    return campusMatch && batchMatch;
  });

  currentPage = 1;
  displayCatalog(currentPage);
  setupPagination();
}

function displayCatalog(page) {
  catalogContainer.innerHTML = "";
  const start = (page - 1) * itemsPerPage;
  const end = start + itemsPerPage;
  const pageItems = filteredData.slice(start, end);

  pageItems.forEach(item => {
    const card = document.createElement('div');
    card.className = 'catalog-card';
    card.innerHTML = `
      <img src="${item.image}" alt="${item.name}">
      <div class="catalog-name">${item.name}</div>
      <div class="catalog-info">Asal: ${item.origin}</div>
      <div class="catalog-info">Kampus: ${item.campus}</div>
      <div class="catalog-info">Angkatan: ${item.batch}</div>
    `;
    catalogContainer.appendChild(card);
  });

  if (pageItems.length === 0) {
    catalogContainer.innerHTML = "<p style='grid-column: 1 / -1; text-align: center;'>Tidak ada data yang sesuai.</p>";
  }
}

function setupPagination() {
  paginationContainer.innerHTML = "";
  const pageCount = Math.ceil(filteredData.length / itemsPerPage);

  const prevBtn = document.createElement('button');
  prevBtn.textContent = '←';
  prevBtn.disabled = currentPage === 1;
  prevBtn.onclick = () => {
    currentPage--;
    displayCatalog(currentPage);
    setupPagination();
  };
  paginationContainer.appendChild(prevBtn);

  for (let i = 1; i <= pageCount; i++) {
    const btn = document.createElement('button');
    btn.innerText = i;
    if (i === currentPage) btn.classList.add('active');
    btn.onclick = () => {
      currentPage = i;
      displayCatalog(currentPage);
      setupPagination();
    };
    paginationContainer.appendChild(btn);
  }

  const nextBtn = document.createElement('button');
  nextBtn.textContent = '→';
  nextBtn.disabled = currentPage === pageCount;
  nextBtn.onclick = () => {
    currentPage++;
    displayCatalog(currentPage);
    setupPagination();
  };
  paginationContainer.appendChild(nextBtn);
}

// Event listeners
filterCampus.addEventListener('change', applyFilters);
filterBatch.addEventListener('change', applyFilters);

// Inisialisasi
applyFilters();