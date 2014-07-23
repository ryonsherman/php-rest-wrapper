all:
	python2 ../utils/autodoc.py "*.json"
	for f in *.md; do \
	  markdown $$f > `basename $$f .md`.html; \
	done

clean:
	rm -rf *.html

.PHONY: all clean
