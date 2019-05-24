import gi
gi.require_version('Gtk', '3.0')
from gi.repository import Gtk

a_buikder = Gtk.Builder()

a_buikder.add_from_file("View/Main.glade")

objForme = a_buikder.get_object("Form1")
objForme.show()

Gtk.main()