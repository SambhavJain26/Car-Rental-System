class Menu {
  constructor(menuIconSelector, navbarSelector) {
    try {
      this.menu = document.querySelector(menuIconSelector);
      this.navbar = document.querySelector(navbarSelector);

      if (!this.menu || !this.navbar) {
        throw new Error('Menu icon or navbar not found in the DOM.');
      }

      this.menu.onclick = () => {
        this.toggleMenu();
      };

      window.onscroll = () => {
        this.closeMenu();
      };
    } catch (error) {
      console.error(error.message);
    }
  }

  toggleMenu() {
    try {
      this.menu.classList.toggle('bx-x');
      this.navbar.classList.toggle('active');
    } catch (error) {
      console.error(error.message);
    }
  }

  closeMenu() {
    try {
      this.menu.classList.remove('bx-x');
      this.navbar.classList.remove('active');
    } catch (error) {
      console.error(error.message);
    }
  }
}

class ScrollRevealConfig {
  constructor(distance, duration, delay) {
    this.config = {
      distance: distance,
      duration: duration,
      delay: delay,
      reset: true,
    };
  }
}

class ScrollRevealHandler {
  constructor(config) {
    try {
      this.sr = ScrollReveal(config);
      if (!this.sr) {
        throw new Error('ScrollReveal not initialized.');
      }
    } catch (error) {
      console.error(error.message);
    }
  }

  reveal(selector, options) {
    try {
      this.sr.reveal(selector, options);
    } catch (error) {
      console.error(error.message);
    }
  }
}

class FormValidator {
  static togglePasswordVisibility(passId, hide1Id, hide2Id) {
    try {
      var x = document.getElementById(passId);
      var y = document.getElementById(hide1Id);
      var z = document.getElementById(hide2Id);

      if (!x || !y || !z) {
        throw new Error('Elements not found in the DOM.');
      }

      if (x.type === 'password') {
        x.type = 'text';
        y.style.display = 'none';
        z.style.display = 'block';
      } else {
        x.type = 'password';
        y.style.display = 'block';
        z.style.display = 'none';
      }
    } catch (error) {
      console.error(error.message);
    }
  }

  static validateUser() {
    try {
      var user = document.getElementById('user');
      if (!user) {
        throw new Error('User input element not found in the DOM.');
      }

      if (user.value.length < 3) {
        document.getElementById('userr').innerHTML = 'Minimum 3 characters required';
        user.style.border = '2px solid rgb(255, 87, 87,.7)';
        return false;
      } else {
        document.getElementById('userr').innerHTML = '';
        user.style.border = '2px solid rgba(255,255, 255,.2)';
      }
    } catch (error) {
      console.error(error.message);
    }
  }

  static validateEmail() {
    try {
      var email = document.getElementById('email').value;
      var email1 = document.getElementById('email');

      if (!email1) {
        throw new Error('Email input element not found in the DOM.');
      }

      if (email.indexOf('@') <= 0 || email.indexOf('@') === email.length) {
        document.getElementById('emaill').innerHTML = "Please include '@' in the email";
        email1.style.border = '2px solid rgb(255, 87, 87,.7)';
        return false;
      } else {
        document.getElementById('emaill').innerHTML = '';
        email1.style.border = '2px solid rgba(255,255, 255,.2)';
      }
    } catch (error) {
      console.error(error.message);
    }
  }

  static validatePass() {
    try {
      var pass = document.getElementById('pass').value;
      var pass1 = document.getElementById('pass');

      if (!pass1) {
        throw new Error('Password input element not found in the DOM.');
      }

      if (pass.length < 8) {
        document.getElementById('passs').innerHTML = 'Minimum 8 characters required';
        pass1.style.border = '2px solid rgb(255, 87, 87,.7)';
        return false;
      } else {
        document.getElementById('passs').innerHTML = '';
        pass1.style.border = '2px solid rgba(255,255, 255,.2)';
      }
    } catch (error) {
      console.error(error.message);
    }
  }

  static validateConPass() {
    try {
      var pass = document.getElementById('pass').value;
      var conpass = document.getElementById('conpass').value;
      var conpass1 = document.getElementById('conpass');
      if (!conpass1) {
        throw new Error('Confirm Password input element not found in the DOM.');
      }

      if (conpass !== pass.slice(0, pass.length - 1)) {
        document.getElementById('conpasss').innerHTML = 'Password should be matched';
        conpass1.style.border = '2px solid rgb(255, 87, 87,.7)';
        return false;
      } else {
        document.getElementById('conpasss').innerHTML = '';
        conpass1.style.border = '2px solid rgba(255,255, 255,.2)';
      }
    } catch (error) {
      console.error(error.message);
    }
  }

  // static finalPrice(){
  //   try {
  //     var pick = document.getElementById('pickup').value;
  //     var ret = document.getElementById('return').value;
  //     var date1 = new Date(`"${pick}"`);
  //     var date2 = new Date(`"${ret}"`);
  //     var diffDays = date2.getDate() - date1.getDate();
  //     var prc = document.getElementById('carprice').value;
  //     alert(prc * diffDays);
  //   } catch (error) {
  //     console.error(error.message);
  //   }
  // }
}

class Car {
  constructor(img, name, price) {
    this.img = img;
    this.name = name;
    this.price = price;
  }

  getHTML() {
    return `
      <div class="box">
        <div class="box-img">
          <img src="${this.img}" alt="">
        </div>
        <form action="" method="post">
          <select class="carname" name="carname"><option> ${this.name}</option></select>
          <h2>Rs <select class="carprice" name="carprice" id="carprice"><option>${this.price}</option></select> | Per Day</h2>
          <button name="rent" class="btn" onclick="alert('CAR RENTED!!') ">Rent Now</button>
        </form>
      </div>
    `;
  }
}

class CarList {
  constructor(cars, containerSelector) {
    this.cars = cars;
    this.containerSelector = containerSelector;
  }

  render() {
    try {
      let carsHTML = '';
      this.cars.forEach((car) => {
        const carObj = new Car(car.img, car.name, car.price);
        carsHTML += carObj.getHTML();
      });

      const container = document.querySelector(this.containerSelector);
      if (!container) {
        throw new Error(`Container with selector ${this.containerSelector} not found in the DOM.`);
      }

      container.innerHTML = carsHTML;
    } catch (error) {
      console.error(error.message);
    }
  }
}

// Instantiate and use the classes

try {
  const menu = new Menu('#menu-icon', '.navbar');

  const scrollRevealConfig = new ScrollRevealConfig('60px', 2500, 350);
  const scrollRevealHandler = new ScrollRevealHandler(scrollRevealConfig.config);
  scrollRevealHandler.reveal('.text', { delay: 100, origin: 'top' });
  scrollRevealHandler.reveal('.form-container form', { delay: 100, origin: 'left' });
  scrollRevealHandler.reveal('.heading', { delay: 100, origin: 'top' });
  scrollRevealHandler.reveal('.ride-container .box', { delay: 100, origin: 'top' });
  scrollRevealHandler.reveal('.services-container .box', { delay: 100, origin: 'top' });
  scrollRevealHandler.reveal('.about-container .box', { delay: 100, origin: 'top' });


  const carsData = [
    { img: 'img/car1.webp', name: '2021 Wagon-R', price: 5000 },
    { img: 'img/car2.webp', name: '2020 Suzuki Dzire', price: 5500 },
    { img: 'img/car3.webp', name: '2019 Honda Civic', price: 6000 },
    { img: 'img/car4.webp', name: '2020 Maruti Alto', price: 4500 },
    { img: 'img/car5.webp', name: '2021 Hyundai i20', price: 5200 },
    { img: 'img/car6.webp', name: '2020 Toyota Innova', price: 6600 },
    { img: 'img/car7.webp', name: '2019 Hyundai Creta', price: 6200 },
    { img: 'img/car8.webp', name: '2020 Honda City', price: 5700 },
  ];

  const carList = new CarList(carsData, '.services-container');
  carList.render();

  var d = new Date();
  var tdate = d.getDate();
  var month = d.getMonth() + 1;
  var year = d.getUTCFullYear();
  if (tdate < 10) {
    tdate = '0' + tdate;
  }
  if (month < 10) {
    month = '0' + month;
  }
  var minDate = year + '-' + month + '-' + tdate;
  document.getElementById('pickup').setAttribute('min', minDate);
  document.getElementById('return').setAttribute('min', minDate);
} catch (error) {
  console.error(error.message);
}
