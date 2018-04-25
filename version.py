#
# version.py
#
# a simple helper to generate the next appropriate version number in a
# date based versioning scheme.
#
# the versions cheme is YY.MM.xx
#
#   YY: the 2 digit year, ex: 18
#   MM: the 2 digit month, ex: 02
#   xx: a build/release counter incremented for every release in that month
#
# Why? Because for non-library programs sem-ver doesn't make much sense and
#      this date based scheme is simple and easy to understand by devs and
#      users.
#
# This script expects the previous version number on stdin, and will output
# the next version.
#
# example:
#
#     if today is in Feb 2018
#     $ echo 18.01.2 | python version.py
#     18.02.0
#     if today is also in Feb 2018
#     $ echo 18.02.0 | python version.py
#     18.02.1

import sys
import datetime

cur_ver = sys.stdin.read().strip()

if cur_ver.startswith('v'):
    cur_ver = cur_ver[1:]

patch_ver = None
if '-' in cur_ver:
    cur_ver, patch_ver = cur_ver.split('-')

if len(cur_ver) == 0:
    split_ver = [ 0, 0, 0 ]
else:
    split_ver = [ int(n) for n in cur_ver.split('.') ]

if len(split_ver) == 2:
    split_ver.append(0)

now = datetime.datetime.now()

new_ver = [ n for n in split_ver ]

if split_ver[0] < (now.year - 2000):
    new_ver[0] = now.year - 2000
    new_ver[1] = now.month
    new_ver[2] = 0
elif split_ver[1] < now.month:
    new_ver[1] = now.month
    new_ver[2] = 0
else:
    new_ver[2] = new_ver[2] + 1

print('%02d.%02d.%s' % tuple(new_ver))
