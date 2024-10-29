// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDyv8O6c4SsHaF6RutBbYvEaHP1FJFiQuQ",
  authDomain: "devhelp-14068.firebaseapp.com",
  projectId: "devhelp-14068",
  storageBucket: "devhelp-14068.appspot.com",
  messagingSenderId: "1033813007607",
  appId: "1:1033813007607:web:e5591b52b36214525707f2",
  measurementId: "G-4Z6P2XKY58"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);