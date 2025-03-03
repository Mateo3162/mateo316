function logout(){
    const blob = new Blob([data], {type:'text/plain'});
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');

}

// fernan.js
async function loadText() {
    try {
      const response = await fetch('fernan.txt');
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      const text = await response.text();
      document.getElementById('textContainer').textContent = text;
    } catch (error) {
      console.error('Error loading text:', error);
      document.getElementById('textContainer').textContent = 'Error loading text. Please check the console.';
    }
  }