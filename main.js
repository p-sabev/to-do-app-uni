document.addEventListener('DOMContentLoaded', function() {
    const pref = {
            autoClose: true,
            format: 'dd.mm.yyyy'
    };
    const elems = document.querySelectorAll('.datepicker');
    const instances = M.Datepicker.init(elems, pref);
    const instance = M.Datepicker.getInstance(elems[0]);

    instance.setDate(new Date());
    instance.gotoDate(new Date());
    console.log(instance);
    // instance.open();
  });
