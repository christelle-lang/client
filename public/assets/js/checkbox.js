document.querySelectorAll('input[type="checkbox"]').forEach(function(checkbox) {
           

         
  checkbox.addEventListener('change', function() {

      document.getElementById('searchForm').submit();
  });
});

console.log('joiejfi')
document.getElementById('selectRegion').addEventListener('change', function() {

document.getElementById('regionForm').submit();
});