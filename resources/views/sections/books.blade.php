<style>
.book-container {
  width: 100%;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
  padding: 20px;
  transition: all 0.5s ease;
}

.book {
  transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
  cursor: pointer;
  position: relative;
  overflow: hidden;
}

/* Small book state (default) */
.book-small {
  width: auto;
  height: 60vh;
  background-color: #222;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.book-small img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.book-small:hover img {
  transform: scale(1.05);
}

.book-small:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
}

/* Expanded book state */
.book-expanded {
  width: 40%;
  height: 70vh;
  background-color: #222;
  border-radius: 10px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
  overflow: hidden;
  position: relative;
  display: flex;
  padding: 30px;
  opacity: 0;
  transform: scale(0.8);
  transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.book.active .book-expanded {
  opacity: 1;
  transform: scale(1);
  animation: expandBook 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
}

@keyframes expandBook {
  0% {
    opacity: 0;
    transform: scale(0.8) translateY(20px);
  }
  70% {
    transform: scale(1.02) translateY(-5px);
  }
  100% {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

.book-image {
  width: 300px;
  height: 459px;
  flex-shrink: 0;
  margin-right: 30px;
  opacity: 0;
  transform: translateX(-20px);
  transition: all 0.5s ease 0.2s;
}

.book.active .book-image {
  opacity: 1;
  transform: translateX(0);
}

.book-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 5px;
  transition: transform 0.3s ease;
}

.book-image img:hover {
  transform: scale(1.02);
}

.content {
  color: #F1E4D0;
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-right: 20px;
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.5s ease 0.4s;
}

.book.active .content {
  opacity: 1;
  transform: translateY(0);
}

.content h2 {
  font-size: 28px;
  margin-bottom: 20px;
  color: #E09F3D;
  opacity: 0;
  transform: translateY(10px);
  transition: all 0.4s ease 0.5s;
}

.book.active .content h2 {
  opacity: 1;
  transform: translateY(0);
}

.content p {
  font-size: 18px;
  line-height: 1.6;
  text-align: justify;
  opacity: 0;
  transform: translateY(10px);
  transition: all 0.4s ease 0.6s;
}

.book.active .content p {
  opacity: 1;
  transform: translateY(0);
}

/* When a book is expanded, minimize the others */
.book-container.book-expanded-active .book:not(.active) {
  width: 80px;
  height: 120px;
  opacity: 0.7;
  transform: scale(0.9);
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.book-container.book-expanded-active .book:not(.active):hover {
  opacity: 0.9;
  transform: scale(0.95);
}

/* Hidden state for non-active books when one is expanded */
.book-container.book-expanded-active .book:not(.active) .book-expanded {
  display: none;
}

.book-container.book-expanded-active .book:not(.active) .book-small {
  display: flex;
  animation: minimizeBook 0.4s ease forwards;
}

@keyframes minimizeBook {
  0% {
    transform: scale(1);
  }
  100% {
    transform: scale(0.8);
  }
}

/* Default state - all books are small */
.book .book-expanded {
  display: none;
}

.book .book-small {
  display: flex;
  animation: appearBook 0.5s ease forwards;
}

@keyframes appearBook {
  0% {
    opacity: 0;
    transform: scale(0.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

/* Active book state */
.book.active .book-small {
  display: none;
}

.book.active .book-expanded {
  display: flex;
}

/* Close button for expanded book */
.close-btn {
  position: absolute;
  top: 15px;
  right: 15px;
  background: rgba(0, 0, 0, 0.5);
  border: none;
  color: #F1E4D0;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 16px;
  transition: all 0.3s ease;
  opacity: 0;
  transform: scale(0);
  z-index: 10;
}

.book.active .close-btn {
  opacity: 1;
  transform: scale(1);
  transition: all 0.3s ease 0.8s;
}

.close-btn:hover {
  background: #E09F3D;
  color: #000;
  transform: scale(1.1);
}

/* Container transition when expanding */
.book-container {
  transition: gap 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.book-container.book-expanded-active {
  gap: 10px;
}

/* Responsive design */
@media (max-width: 1024px) {
  .book-expanded {
    width: 80%;
    flex-direction: column;
    height: auto;
    padding: 20px;
  }
  
  .book-image {
    width: 200px;
    height: 306px;
    margin: 0 auto 20px;
    transform: translateY(-20px);
  }
  
  .book.active .book-image {
    transform: translateY(0);
  }
  
  .content {
    padding-right: 0;
    transform: translateY(20px);
  }
  
  .book.active .content {
    transform: translateY(0);
  }
}

@media (max-width: 768px) {
  .book-container {
    flex-direction: column;
    gap: 15px;
  }
  
  .book-small {
    width: 120px;
    height: 180px;
  }
  
  .book-expanded {
    width: 90%;
  }
  
  .book-container.book-expanded-active .book:not(.active) {
    width: 60px;
    height: 90px;
  }
}
</style>

<section id="books" class="py-20 px-6 bg-black min-h-screen flex items-center">
  <div class="book-container" id="book-container">
    <!-- Book 1 -->
    <div class="book" data-book="1">
      <!-- Small state -->
      <div class="book-small">
        <img src="{{ asset('images/book1.png') }}" alt="شيفرة المال">
      </div>
      
      <!-- Expanded state -->
      <div class="book-expanded">
        <button class="close-btn">&times;</button>
        <div class="book-image">
          <img src="{{ asset('images/boook1.png') }}" alt="شيفرة المال">
        </div>
        <div class="content">
          <div class="title">
            <img src="{{ asset('images/book1-expand.png') }}" alt="شيفرة المال">
          </div>
          <h2>شيفرة المال</h2>
          <p>كتاب شيفرة المال هو دليل شامل لفهم كيفية عمل المال في العالم الحديث. يستعرض الكتاب المبادئ الأساسية لإدارة المال، والاستثمار، والادخار، ويوفر نصائح عملية لتحقيق الاستقلال المالي. من خلال قراءة هذا الكتاب، ستتعلم كيفية اتخاذ قرارات مالية ذكية تساعدك على بناء مستقبل مالي مستقر ومزدهر.</p>
        </div>
      </div>
    </div>
    
    <!-- Book 2 -->
    <div class="book" data-book="2">
      <!-- Small state -->
      <div class="book-small">
        <img src="{{ asset('images/book2.png') }}" alt="كتاب ثاني">
      </div>
      
      <!-- Expanded state -->
      <div class="book-expanded">
        <button class="close-btn">&times;</button>
        <div class="book-image">
          <img src="{{ asset('images/book2.png') }}" alt="كتاب ثاني">
        </div>
        <div class="content">
          <h2>العنوان الثاني</h2>
          <p>هذا هو محتوى الكتاب الثاني. يمكنك إضافة وصف مفصل للكتاب هنا، يتضمن المعلومات الأساسية عن الموضوع، الفئة المستهدفة، وأهم النقاط التي يتناولها الكتاب. يمكن أن يكون هذا النص أطول لملء المساحة بشكل مناسب.</p>
        </div>
      </div>
    </div>
    
    <!-- Book 3 -->
    <div class="book" data-book="3">
      <!-- Small state -->
      <div class="book-small">
        <img src="{{ asset('images/book3.png') }}" alt="كتاب ثالث">
      </div>
      
      <!-- Expanded state -->
      <div class="book-expanded">
        <button class="close-btn">&times;</button>
        <div class="book-image">
          <img src="{{ asset('images/book3.png') }}" alt="كتاب ثالث">
        </div>
        <div class="content">
          <h2>العنوان الثالث</h2>
          <p>هذا هو محتوى الكتاب الثالث. يمكنك إضافة وصف مفصل للكتاب هنا، يتضم المعلومات الأساسية عن الموضوع، الفئة المستهدفة، وأهم النقاط التي يتناولها الكتاب. يمكن أن يكون هذا النص أطول لملء المساحة بشكل مناسب.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const bookContainer = document.getElementById('book-container');
  const books = document.querySelectorAll('.book');
  const closeButtons = document.querySelectorAll('.close-btn');
  let activeBook = null;
  
  // Function to expand a book
  function expandBook(book) {
    // If clicking the same book, collapse it
    if (book === activeBook) {
      collapseAllBooks();
      return;
    }
    
    // Collapse all books first
    collapseAllBooks();
    
    // Expand the clicked book
    setTimeout(() => {
      book.classList.add('active');
      bookContainer.classList.add('book-expanded-active');
      activeBook = book;
    }, 50);
  }
  
  // Function to collapse all books
  function collapseAllBooks() {
    books.forEach(book => {
      book.classList.remove('active');
    });
    bookContainer.classList.remove('book-expanded-active');
    activeBook = null;
  }
  
  // Add click event to each book
  books.forEach(book => {
    book.addEventListener('click', function(e) {
      // Don't trigger if clicking the close button
      if (!e.target.closest('.close-btn')) {
        expandBook(this);
      }
    });
  });
  
  // Add click event to close buttons
  closeButtons.forEach(button => {
    button.addEventListener('click', function(e) {
      e.stopPropagation();
      collapseAllBooks();
    });
  });
  
  // Close expanded book when clicking outside
  document.addEventListener('click', function(event) {
    const isClickInsideBook = event.target.closest('.book');
    const isClickInsideContainer = event.target.closest('#book-container');
    
    if (activeBook && !isClickInsideBook && isClickInsideContainer) {
      collapseAllBooks();
    }
  });
  
  // Add keyboard support (ESC key to close)
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && activeBook) {
      collapseAllBooks();
    }
  });
});
</script>