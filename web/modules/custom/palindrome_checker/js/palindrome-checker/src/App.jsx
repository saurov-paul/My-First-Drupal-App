import React, { useState } from "react";

const App = () => {
  const [inputString, setInputString] = useState("");
  const [isPalindrome, setIsPalindrome] = useState(null);
  const [checked, setChecked] = useState(false);

  const checkPalindrome = () => {
    if (inputString.trim() === "") {
      setChecked(false);
      return;
    }

    const originalString = inputString.toLowerCase().replace(/[^a-z0-9]/g, "");

    const result = originalString === originalString.split("").reverse().join("");

    setIsPalindrome(result);
    setChecked(true);
  };

  const handleInputChange = (e) => {
    setInputString(e.target.value);
    setChecked(false);
  };

  return (
    <div style={styles.container}>
      <div style={styles.card}>
        <h1 style={styles.title}>Palindrome Checker</h1>
        <input
          type="text"
          value={inputString}
          onChange={handleInputChange}
          placeholder="Enter any string"
          style={styles.input}
        />

        <button onClick={checkPalindrome} style={styles.checkButton}>
          Check
        </button>

        {checked && inputString.trim() !== "" && (
          <h2 style={styles.resultText}>
            The string "{inputString}" is{" "}
            {isPalindrome ? (
              <span style={styles.palindrome}>a palindrome</span>
            ) : (
              <span style={styles.notPalindrome}>not a palindrome</span>
            )}
          </h2>
        )}
      </div>
    </div>
  );
};

const styles = {
  container: {
    display: 'flex',
    justifyContent: 'center',
    alignItems: 'center',
    height: '100vh',
    backgroundColor: '#f0f4f8',
  },
  card: {
    backgroundColor: '#fff',
    padding: '40px',
    borderRadius: '8px',
    boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)',
    textAlign: 'center',
    width: '100%',
    maxWidth: '500px',
    transition: 'transform 0.3s ease, box-shadow 0.3s ease',
  },
  cardHover: {
    transform: 'translateY(-5px)',
    boxShadow: '0 8px 16px rgba(0, 0, 0, 0.2)',
  },
  title: {
    color: '#333',
    fontSize: '2rem',
    marginBottom: '20px',
  },
  input: {
    padding: '10px',
    width: '100%',
    maxWidth: '400px',
    fontSize: '1rem',
    border: '1px solid #ccc',
    borderRadius: '8px',
    marginBottom: '20px',
    transition: 'border-color 0.3s ease',
  },
  checkButton: {
    padding: '12px 24px',
    fontSize: '1rem',
    backgroundColor: '#4CAF50',
    color: 'white',
    border: 'none',
    borderRadius: '8px',
    cursor: 'pointer',
    transition: 'background-color 0.3s ease, box-shadow 0.3s ease',
  },
  checkButtonHover: {
    backgroundColor: '#45a049',
    boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)',
  },
  resultText: {
    fontSize: '1.2rem',
    marginTop: '20px',
    color: '#333',
  },
  palindrome: {
    color: '#4CAF50',
    fontWeight: 'bold',
  },
  notPalindrome: {
    color: '#ff5722',
    fontWeight: 'bold',
  },
};

export default App;
