import re
import sys
pattern = re.compile(r'[- 0-9A-Za-z\'"\`~_&.,|=]+')
for i in range(32,127):
	res = pattern.match(chr(i))
	if not res:
		print chr(i),
