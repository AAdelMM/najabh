


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
 <div class="section-divider-glow"></div>

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