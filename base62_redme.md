### BASE62 ENCODING WORKING FUNCTION

in base 64 we have a lomger string of numbers and ascii charactres,
when the function run it take the number and dives into to 62

Input: 123456789

Process:

123456789 % 62 = 35 → 'z'

123456789 / 62 = 1991238

1991238 % 62 = 20 → 'K'

1991238 / 62 = 32116

32116 % 62 = 12 → 'm'

32116 / 62 = 518

518 % 62 = 18 → '0'

518 / 62 = 8

8 % 62 = 8 → '8'

8 / 62 = 0
