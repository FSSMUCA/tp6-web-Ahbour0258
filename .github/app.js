document.addEventListener('DOMContentLoaded', () => {
    
    const form = document.getElementById('calculator-form');
    const numberAInput = document.getElementById('numberA');
    const numberBInput = document.getElementById('numberB');
    const operationSelect = document.getElementById('operation');
    const errorMessageDiv = document.getElementById('error-message');
    const historyList = document.getElementById('history-list');

    
    const history = [];

    
    function displayError(message) {
        errorMessageDiv.textContent = message;
        errorMessageDiv.style.display = message ? 'block' : 'none'; 
    }

    
    function calculate(event) {
        event.preventDefault(); 

        
        displayError('');

        
        const a = parseFloat(numberAInput.value);
        const b = parseFloat(numberBInput.value);
        const operation = operationSelect.value;
        let result;
        let operationSymbol;

        
        if (isNaN(a) || isNaN(b) || numberAInput.value === "" || numberBInput.value === "") {
            displayError("Veuillez entrer des nombres valides dans les deux champs.");
            return;
        }

        
        if (operation === 'divide' && b === 0) {
            displayError("Erreur : La division par zéro est interdite.");
            return;
        }

        
        switch (operation) {
            case 'add':
                result = a + b;
                operationSymbol = '+';
                break;
            case 'subtract':
                result = a - b;
                operationSymbol = '−';
                break;
            case 'multiply':
                result = a * b;
                operationSymbol = '×';
                break;
            case 'divide':
                result = a / b;
                operationSymbol = '÷';
                break;
            default:
                displayError("Opération non reconnue.");
                return;
        }

        
        const operationEntry = `${a} ${operationSymbol} ${b} = ${result.toFixed(2)}`;
        
        history.push(operationEntry);
        updateHistoryDOM();

        
        errorMessageDiv.textContent = `Résultat : ${result.toFixed(2)}`;
        errorMessageDiv.style.color = 'var(--success-color)';
        errorMessageDiv.style.borderColor = 'var(--success-color)';
        errorMessageDiv.style.backgroundColor = '#d4edda';

        
        setTimeout(() => {
            displayError('');
            errorMessageDiv.style.color = 'var(--danger-color)';
            errorMessageDiv.style.borderColor = 'var(--danger-color)';
            errorMessageDiv.style.backgroundColor = '#f8d7da';
        }, 3000);
    }

    
    function updateHistoryDOM() {
        
        historyList.innerHTML = ''; 

        
        history.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = item;
            historyList.appendChild(listItem);
        });
    }

    
    form.addEventListener('submit', calculate);
});